<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Contracts\Services\Admin\WorkoutServiceInterface;
use App\Exports\MembersExport;
use App\Exports\UsersExport;
use App\Http\Requests\UserProfileEditRequest;
use App\Imports\InstructorsImport;
use App\Imports\MembersImport;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Contracts\Services\Admin\InstructorServiceInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Feedback;
use App\Exports\InstructorsExport;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserFeedbackRequest;
use App\Contracts\Services\UserServiceInterface;



class UserController extends Controller
{
    private $workoutService;
    private $instructorService;
    private $adminService;
    private $userService;

    /**
      * Create a new controller instance.
      * @param WorkoutInterface $AdminServiceInterface $InstructorServiceInterface
      * @return void
      */

    public function __construct(UserServiceInterface $userServiceInterface,WorkoutServiceInterface $workoutServiceInterface,AdminServiceInterface $adminServiceInterface,InstructorServiceInterface $instructorServiceInterface)
    {
       $this->workoutService = $workoutServiceInterface;
       $this->adminService = $adminServiceInterface;
       $this->instructorService = $instructorServiceInterface;
       $this->userService = $userServiceInterface;
    }

    //
    public function userProfile()
    {
        if (Auth::guest()) {
            return redirect()->route('auth.login');
        }

        $user = Auth::user(); // Retrieve the currently logged-in user

        return view('user.profile')->with('user', $user);

    }

    /**
     * Show User
     * @return object
    */
    public function index()
    {
        $user = Auth::user();
        $instructors = $this->instructorService->userget();
        $instructorCounts = $instructors->count();
        $feedbacks = Feedback::all();

        return view('user.index', [
            'instructors' => $instructors,
            'instructorCounts' => $instructorCounts,
            'feedbacks' => $feedbacks,
            'user' => $user,
        ]);
    }

     /**
     * Return feedback
     * @return object
    */
    public function feedback()
    {
        if (Auth::guest())
        {
            return redirect()->route

            ('auth.login');
        }
        $user = Auth::user(); // Retrieve the currently logged-in user

        return view('user.feedback')->with('user', $user);
    }

    public function workout()
    {

        if (Auth::guest())
        {
            return redirect()->route('auth.login');
        }
        $user = Auth::user();
        $workouts = $this->workoutService->userget();
        $workoutCounts = $workouts->count();
        return view('user.workoutlist', ['workouts' => $workouts, 'workoutCounts' => $workoutCounts , 'user' => $user]);
    }

    public function purchase()
    {
        if (Auth::guest()) {
            return redirect()->route('auth.login');
        }
        return view('user.purchase');
    }

    public function successPurchase()
    {
        return view('user.success-purchase');
    }

    public function exportUsers()
    {
        $user = $this->adminService->exportuser();
        return Excel::download(new UsersExport($user), 'users.xlsx');

    }

    public function exportMembers()
    {
        return Excel::download(new MembersExport(), 'members.xlsx');
    }

    public function importView()
    {
        return view('admin.user.Userupload');
    }

    public function import()
    {
        try {
            $import = new UsersImport();
            Excel::import($import, request()->file('file'));
            return redirect()->back()->with('message', 'File Imported Successfully...');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                $errors = [
                    'Duplicate data found. Please check your file and try again.',
                ];
                throw ValidationException::withMessages($errors);
            }
        }
    }

    public function importViews()
    {
        return view('admin.instructor.Instructorupload');
    }

    public function imports()
    {
        try {
            $import = new InstructorsImport();
            Excel::import($import, request()->file('file'));
            return redirect()->back()->with('message', 'File Imported Successfully...');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                $errors = [
                    'Duplicate data found. Please check your file and try again.',
                ];
                throw ValidationException::withMessages($errors);
            }
        }
    }

    public function importV()
    {
        return view('admin.member.Memberupload');
    }

    public function import_Views(Request $request)
    {
        try {
            $import = new MembersImport();
            Excel::import($import, request()->file('file'));
            return redirect()->back()->with('message', 'File Imported Successfully...');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                $errors = [
                    'Duplicate data found. Please check your file and try again.',
                ];
                throw ValidationException::withMessages($errors);
            }
        }
    }

    /**
     * Return Specific User
     * @return object
    */
    public function edit($id)
    {
        $user = auth()->user();
        return view('user.profile', ['user' => $user]);
    }

    /**
     * Update User
     * @return void
    */
    public function update(UserProfileEditRequest $request,$id)
    {
        $this->userService->update($id , $request->only([
            'name',
            'email',
            'image',
            'age',
            'phone',
            'gender',
            'password',
            'address',

         ]));

        // Redirect or return a response
        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Return send feedback
     * @return void
    */
    public function sendFeedback(UserFeedbackRequest $request)

    {
        $this->userService->send($request->only([

            'message',
            'user_id',
         ]));

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }


}
