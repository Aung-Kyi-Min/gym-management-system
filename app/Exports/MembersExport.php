<?php

namespace App\Exports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MembersExport implements FromCollection
, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Member::all();
    }

    public function headings(): array
    {
        return [
            'Id',
            'User',
            'Workout',
            'Instructor',
            'Sub_month',
            'Joining_Date',
            'End_Date',
            'Created At',
            'Updated At',
        ];
    }

    public function map($member): array
    {
        return [
            $member->id,
            $member->user->name,
            $member->workout->name,
            $member->instructor->name,
            $member->sub_month,
            $member->joining_date,
            $member->end_date,
            $member->created_at,
            $member->updated_at,
        ];
    }
}
