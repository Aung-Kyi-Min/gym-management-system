<?php

namespace App\Http\Controllers;

use App\Models\User;
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
use App\Http\Requests\UserProfileEditRequest;
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
        if (Auth::guest())
        {
            return redirect()->route('auth.login');
        }

        $user = Auth::user(); // Retrieve the currently logged-in user

        return view('user.profile')->with('user', $user);
        ;
    }


    public function index()
    {
       
        $instructors = $this->instructorService->get();
        $instructorCounts = $instructors->count();
        return view('user.index' , ['instructors' => $instructors , 'instructorCounts' => $instructorCounts]);
    }
    

    public function feedback()
    {
        if (Auth::guest())
        {
            return redirect()->route('auth.login');
        }
        return view('user.feedback');
    }

    public function workout()
    {

        if (Auth::guest())
        {
            return redirect()->route('auth.login');
        }

        $workouts = $this->workoutService->get();
        $workoutCounts = $workouts->count();
        return view('user.workoutlist' , ['workouts' => $workouts , 'workoutCounts' => $workoutCounts]);
    }

    public function purchase()
    {
        if (Auth::guest())
        {
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

    public function import(Request $request)
    {
        Excel::import(new UsersImport(), $request->file);
        return redirect()->back()->with('message', 'File Imported Successfully...');
    }

    public function importViews()
    {
        return view('admin.instructor.Instructorupload');
    }

    public function imports(Request $request)
    {
        Excel::import(new InstructorsImport(), $request->file);
        return redirect()->back()->with('message', 'File Imported Successfully...');
    }

    public function importV()
    {
        return view('admin.member.Memberupload');
    }

    public function import_Views(Request $request)
    {
        Excel::import(new MembersImport(), $request->file);
        return redirect()->back()->with('message', 'File Imported Successfully...');
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
