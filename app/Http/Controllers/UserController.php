<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Models\User;
use App\Exports\InstructorsExport;
use App\Exports\MembersExport;
use App\Imports\InstructorsImport;
use App\Imports\MembersImport;
use App\Imports\UsersImport;
use Illuminate\Http\Request;


class UserController extends Controller
{
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
        return view('user.workoutlist');
    }

    public function purchase(){
        return view('user.purchase');
    }

    public function successPurchase(){
        return view('user.success-purchase');
    }

    public function exportUsers()
    {
        $users = User::where('role', 1)->get();
        return Excel::download(new UsersExport($users), 'users.xlsx');
    }

    public function exportInstructors()
    {
        return Excel::download(new InstructorsExport(), 'instructors.xlsx');
    }

    public function exportMembers()
    {
        return Excel::download(new MembersExport(), 'members.xlsx');
    }

    public function importView()
    {
        return view('admin.Userupload');
    }

    public function import(Request $request)
    {
        Excel::import(new UsersImport(), $request->file);
        return redirect()->back()->with('message', 'File Imported Successfully...');
    }

    public function importViews()
    {
        return view('admin.Instructorupload');
    }

    public function imports(Request $request)
    {
        Excel::import(new InstructorsImport(), $request->file);
        return redirect()->back()->with('message', 'File Imported Successfully...');
    }

    public function importV()
    {
        return view('admin.Memberupload');
    }

    public function import_Views(Request $request)
    {
        Excel::import(new MembersImport(), $request->file);
        return redirect()->back()->with('message', 'File Imported Successfully...');
    }
}
