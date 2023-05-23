<?php

namespace App\Imports;

use App\Models\Member;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MembersImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Member([
            'user_id' => $row['user_id'],
            'workout_id' => $row['workout_id'],
            'instructor_id' => $row['instructor_id'],
            'sub_month' => $row['sub_month'],
            'joining_date' => Carbon::parse($row['joining_date'])->format('Y-m-d H:i:s'),
            'end_date' => Carbon::parse($row['end_date'])->format('Y-m-d H:i:s'),
        ]);
    }
}
