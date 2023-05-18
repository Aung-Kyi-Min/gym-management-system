<?php

namespace App\Http\Controllers\Admin;

use App\Models\Instructor;
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
       	return view('admin.instructor.instructorCreate');
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
       $instructor = $this->instructorService->edit($id);
       return view('admin.instructor.instructorEdit' , ['instructor' => $instructor]);
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
        $search = $request->input('search', '');

        $instructors = $this->instructorService->search($search);

        return view('admin.instructor.instructor', compact('instructors', 'search'));
    }

}
