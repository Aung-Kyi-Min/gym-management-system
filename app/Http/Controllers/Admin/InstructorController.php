<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorCreateRequest;
use App\Contracts\Services\Admin\InstructorServiceInterface;

class InstructorController extends Controller
{
    private $instructorService;
    public function __construct(InstructorServiceInterface $instructorServiceInterface) {
        $this->instructorService = $instructorServiceInterface;
    }

    public function create()
    {
        return view('admin.instructorCreate');
    }

    public function index() {
        $instructors = $this->instructorService->getInstructors();
        return view('admin.instructor', compact('instructors'));
    }
    
    
    public function store(InstructorCreateRequest $request)
    {
        $this->instructorService->createInstructors($request->all());
        session()->flash('success', 'Instructor created successfully! .');
        return redirect()->route('admin.instructor')->with('success', 'Instructor created successfully!');
    }
}
