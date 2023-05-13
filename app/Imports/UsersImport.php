<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row['name'],
            'email' => $row['email'],
            'role' => $row['role'],
            'image' => $row['image'],
            'address' => $row['address'],
            'gender' => $row['gender'],
            'age' => $row['age'],
            'phone' => $row['phone'],
        ]);
    }
}
