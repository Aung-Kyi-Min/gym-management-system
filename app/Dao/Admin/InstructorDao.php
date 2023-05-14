<?php
namespace App\Dao\Admin;

use App\Models\Instructor;
use App\Contracts\Dao\Admin\InstructorDaoInterface;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\InstructorsExport;

class InstructorDao implements InstructorDaoInterface
{
    public function createInstructors(array $data): void
    {

        $image = $data['image'];
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images/admin/instructor'), $imageName);

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
        return Instructor::orderBy('instructors.created_at', 'desc')->paginate(3);
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

    public function getInstructorById($id): object
    {
        return Instructor::findOrFail($id);
    }

    public function updateInstructor(array $data, $id): void
    {
        $instructor = Instructor::findOrFail($id);

        if (isset($data['image'])) {
            $image = $data['image'];
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images/admin/instructor'), $imageName);

            if ($instructor->image) {
                $previousImagePath = public_path('images/admin/instructor').'/'.$instructor->image;

                if (file_exists($previousImagePath))
                {
                    unlink($previousImagePath);
                }
            }
            $data['image'] = $imageName;
        }

        $instructor->update($data);
    }

    public function deleteInstructorById($id): void
    {
        $instructor =Instructor::findOrFail($id);
        $instructor->delete();
    }

    public function export(): object
    {
        //$data = new Excel();
        $data = Excel::download(new InstructorsExport(), 'instructors.xlsx');
        return $data;
    }
}
