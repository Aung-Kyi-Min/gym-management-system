<?php
namespace App\Dao\Admin;

use App\Models\Instructor;
use App\Contracts\Dao\Admin\InstructorDaoInterface;

class InstructorDao implements InstructorDaoInterface
{
    public function createInstructors(array $data): void
    {
        // Upload image file
        $image = $data['image'];
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'), $imageName);
    
        // Save data in the database
        Instructor::create([
            'name' => $data['name'],
            'speciality' => $data['speciality'],
            'image' => $imageName, // save the image name in the table
            'email' => $data['email'],
            'price' => $data['price'],
            'access_time' => $data['access_time'],
        ]);
    }
    
    public function getInstructors(): object
    {
        return Instructor::paginate(3);
    }
}
