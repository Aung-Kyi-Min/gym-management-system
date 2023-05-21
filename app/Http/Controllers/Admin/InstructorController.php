<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Exports\InstructorsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorCreateRequest;
use App\Http\Requests\InstructorUpdateRequest;
use App\Contracts\Services\Admin\InstructorServiceInterface;

class InstructorController extends Controller
{
    private $instructorService;
 
    /**
      * Create a new controller instance.
      * @param InstructorInterface $taskServiceInterface
      * @return void
      */
 
    public function __construct(InstructorServiceInterface $instructorServiceInterface) 
    {
       $this->instructorService =  $instructorServiceInterface;
    }
 
    public function create()
    {
      $loginuser = auth()->user();
      return view('admin.instructor.instructorCreate' , ['loginuser' => $loginuser]);
    }
 
    /**
      * Store Instructor
      * @return void
     */
    public function store(InstructorCreateRequest $request)
    {
       $this->instructorService->store($request->only([
        'name',
        'speciality',
        'image',
        'email',
        'price',
        'access_time',
        
       ]));
       return redirect('/admin/instructor');
    }
 
    public function edit($id)
    {
      $loginuser = auth()->user();
      $instructor = $this->instructorService->edit($id);
      return view('admin.instructor.instructorEdit' , ['instructor' => $instructor , 'loginuser' => $loginuser]);
    }
 
    public function update(InstructorUpdateRequest $request ,$id)
    {
       $this->instructorService->update($id , $request->only([
         'name',
         'speciality',
         'image',
         'email',
         'price',
         'access_time',
       ]));
       
       return redirect('/admin/instructor');
    }
 
    public function destroy($id) 
    {
      $this->instructorService->destroy($id);
      return redirect('/admin/instructor');
    }

    public function instructor(Request $request)
    {
        $loginuser = auth()->user();
        $search = $request->input('search', '');
        $instructors = $this->instructorService->search($search);
        
        foreach ($instructors as $instructor) 
        {
            $instructor->limitedEmail = Str::limit($instructor->email,20);
        }
        
        return view('admin.instructor.instructor', compact('instructors', 'search' , 'loginuser'));
    }

}
