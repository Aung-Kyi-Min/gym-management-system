<?php

namespace App\Exports;

use App\Models\Instructor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class InstructorsExport implements FromCollection
, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Instructor::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Speciality',
            'Image',
            'Email',
            'Price',
            'Access_Time',
            'Created At',
            'Updated At',
        ];
    }

    public function map($instructor): array
    {
        return [
            $instructor->id,
            $instructor->name,
            $instructor->speciality,
            $instructor->image,
            $instructor->email,
            $instructor->price,
            $instructor->access_time,
            $instructor->created_at,
            $instructor->updated_at,
        ];
    }
}
