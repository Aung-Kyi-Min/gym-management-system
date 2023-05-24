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

class UserController extends Controller
{
    private $workoutService;
    private $adminService;
    private $instructorService;

    /**
     * Create a new controller instance.
     * @param WorkoutInterface $taskServiceInterface
     * @return void
     */

    public function __construct(WorkoutServiceInterface $workoutServiceInterface, AdminServiceInterface $adminServiceInterface, InstructorServiceInterface $instructorServiceInterface)
    {
        $this->workoutService = $workoutServiceInterface;
        $this->adminService = $adminServiceInterface;
        $this->instructorService = $instructorServiceInterface;
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
        $instructor = $this->instructorService->get();

        //return view('user.index')->with('user', $user);
        return view('user.index',['user'=> $user , 'instructor' => $instructor]);
    }

    public function feedback()
    {
        if (Auth::guest()) {
            return redirect()->route('auth.login');
        }
        $user = Auth::user();
        return view('user.feedback',['user' => $user]);
    }

    public function workout()
    {

        if (Auth::guest()) {
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

    public function update(UserProfileEditRequest $request)
    {
        // Retrieve the currently logged-in user
        $user = auth()->user();

        // Update the user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Update the password only if it's provided
        $password = $request->input('password');
        if (!empty($password)) {
            $user->password = Hash::make($password);
        }

        $user->gender = $request->input('gender');
        $user->age = $request->input('age');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        // Update the user's image if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = $image->getClientOriginalName();
            $image->storeAs('public/images/admin/user', $name);
            $user->image = $name;
        }

        // Save the changes
        $user->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'User updated successfully');
    }

}
