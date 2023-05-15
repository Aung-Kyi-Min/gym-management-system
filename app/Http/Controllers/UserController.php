<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Admin\AdminServiceInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Models\User;
use App\Exports\InstructorsExport;
use App\Exports\MembersExport;
use App\Imports\InstructorsImport;
use App\Imports\MembersImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use App\Contracts\Services\Admin\WorkoutServiceInterface;

class UserController extends Controller
{
    private $workoutService;
    private $adminService;

    /**
      * Create a new controller instance.
      * @param WorkoutInterface $taskServiceInterface
      * @return void
      */

    public function __construct(WorkoutServiceInterface $workoutServiceInterface,AdminServiceInterface $adminServiceInterface)
    {
       $this->workoutService = $workoutServiceInterface;
       $this->adminService = $adminServiceInterface;
    }

    //
    public function userprofile(){
        return view('user.profile');
    }

    public function index() {
        return view('user.index');
    }

    public function feedback() {
        return view('user.feedback');
    }

    public function workout() {
        $workouts = $this->workoutService->get();
        $workoutCounts = $workouts->count();
        return view('user.workoutlist' , ['workouts' => $workouts , 'workoutCounts' => $workoutCounts]);
    }

    public function purchase(){
        return view('user.purchase');
    }

    public function successPurchase(){
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
}
