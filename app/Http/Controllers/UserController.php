<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Feedback;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Exports\MembersExport;
use App\Imports\MembersImport;
use App\Exports\InstructorsExport;
use App\Imports\InstructorsImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserFeedbackRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserProfileEditRequest;
use Illuminate\Validation\ValidationException;
use App\Contracts\Services\UserServiceInterface;
use App\Contracts\Services\Admin\AdminServiceInterface;
use App\Contracts\Services\Admin\WorkoutServiceInterface;
use App\Contracts\Services\Admin\InstructorServiceInterface;



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

    public function index()
    {
        $user = Auth::user();
        $instructors = $this->instructorService->get();
        $instructorCounts = $instructors->count();
        $feedbacks = Feedback::all();

        return view('user.index', [
            'instructors' => $instructors,
            'instructorCounts' => $instructorCounts,
            'feedbacks' => $feedbacks,
            'user' => $user,
        ]);
    }


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
        $workouts = $this->workoutService->get();
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
     * Edit users
     *
     * @param int $id 
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $user = auth()->user();
        return view('user.profile', ['user' => $user]);
    }

    /**
     * Update User
     *
     * @param  \App\Http\Requests\UserProfileEditRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
            'address',

         ]));

        // Redirect or return a response
        return redirect()->back()->with('success', 'User updated successfully');
    }

    public function editpassword()
    {
        
        $user = auth()->user();
        return view('user.password')->with('user', $user);
    }

    /**
     * Update User password
     *@param  \App\Http\Requests\ChangePasswordRequest
     * @return \Illuminate\Http\Response
    */
    public function passwordUpdate(ChangePasswordRequest $request)
    {
        $userId = $request->id;

        $user = User::findOrFail($userId);
        $currentPasswordStatus = Hash::check($request->current_password, $user->password);

        if ($currentPasswordStatus && $request->current_password !== $request->password) 
        {
            $this->userService->updatePassword($request, $user);

            return redirect()->route('user.profile')->with('success', 'Password updated successfully');

        } elseif ($currentPasswordStatus && $request->current_password === $request->password)
        {
            return redirect()->back()->with('message', 'Old Password should not match with new Password');
        } 
        else 
        {
            return redirect()->back()->with('message', 'Current Password does not match with Old Password');
        }
    }
    

    public function sendFeedback(UserFeedbackRequest $request)

    {
        $this->userService->send($request->only([

            'message',
            'user_id',
         ]));

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }


}
