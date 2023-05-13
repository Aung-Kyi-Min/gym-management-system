<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorCreateRequest;
use App\Http\Requests\InstructorUpdateRequest;
use App\Contracts\Services\Admin\InstructorServiceInterface;

class InstructorController extends Controller
{
    private $instructorService;
    public function __construct(InstructorServiceInterface $instructorServiceInterface) {
        $this->instructorService = $instructorServiceInterface;
    }

    public function create()
    {
        return view('admin.instructor.instructorCreate');
    }

    public function index() {
        $instructors = $this->instructorService->getInstructors();
        return view('admin.instructor.instructor', compact('instructors'));
    }
    
    
    public function store(InstructorCreateRequest $request)
    {
        $this->instructorService->createInstructors($request->all());
        session()->flash('success', 'Instructor created successfully! .');
        return redirect()->route('admin.instructor')->with('success', 'Instructor created successfully!');
    }

    public function search() 
    {
        $instructors = $this->instructorService->searchInstructor();
        return view('admin.instructor.instructor', compact('instructors'));
    }

    public function edit($id) 
    { 
        $instructor= $this->instructorService->getInstructorById($id);
        return view('admin.instructor.instructorEdit',compact('instructor'));
        
    }
    public function update(InstructorUpdateRequest $request, $id)
    {
        $data = $request->only([
            'name',
            'speciality',
            'email',
            'price',
            'access_time',
            'image', // Include the 'image' field in the data array
        ]);
        $this->instructorService->updateInstructor($data, $id);
        
        return redirect()->route('admin.instructor')->with('message', 'Student updated successfully.');
    }
    
    public function destory($id)
    {
        $this->instructorService->deleteInstructorById($id);
        session()->flash('success', 'The instructor has been successfully deleted.');
        return redirect()->route('admin.instructor');
    }

    
}
