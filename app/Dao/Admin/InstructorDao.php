<?php
namespace App\Dao\Admin;

use App\Models\Instructor;
use App\Contracts\Dao\Admin\InstructorDaoInterface;

class InstructorDao implements InstructorDaoInterface
{
    public function createInstructors(array $data): void
    {
        
        $image = $data['image'];
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
        
        Instructor::create([
            'name' => $data['name'],
            'speciality' => $data['speciality'],
            'image' => $imageName, 
            'email' => $data['email'],
            'price' => $data['price'],
            'access_time' => $data['access_time'],
        ]);
    }
    
    public function getInstructors(): object
    {
        return Instructor::paginate(3);
    }

    public function searchInstructor(): object
    {
        $searchQuery = request()->query('search');
        $instructors = Instructor::where(function ($query) use ($searchQuery) {
            $query->where('name', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('email', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('speciality', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('price', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('access_time', 'LIKE', '%' . $searchQuery . '%')
                ->orWhere('image', 'LIKE', '%' . $searchQuery . '%');
        })
        ->latest()
        ->paginate(3);
        
        $instructors->appends(['search' => $searchQuery]);
        return $instructors;
    }

}
