<?php

namespace App\Imports;

use App\Models\Member;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;
//use Ramsey\Collection\Collection;
use Illuminate\Support\Collection;

class MembersImport implements ToCollection , WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        dd(Carbon::parse($rows['joining_date'])->format('Y-m-d H:i:s'));
        foreach ($rows as $row) {
            Member::create([
                //'name' => $row['name'],
                //'email' => $row['email'],
                //'password' => bcrypt($row['password']),
                'user_id' => $row['user_id'],
                'workout_id' => $row['workout_id'],
                'instructor_id' => $row['instructor_id'],
                'sub_month' => $row['sub_month'],
                //$date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['datetime_column']);
                //'joining_date' => $row['datetime_column'] = $date->format('Y-m-d H:i:s'),
                'joining_date' => Carbon::parse($row['joining_date'])->format('Y-m-d H:i:s'),
                'end_date' => Carbon::parse($row['end_date'])->format('Y-m-d H:i:s'),
            ]);
        }
    }
    //public function model(array $row)
    //{
    //    //dd(Carbon::parse('5/22/2022')->format('Y-m-d H:i:s'));
    //    //dd($row);
    //    return new Member([
    //        'user_id' => $row['user_id'],
    //        'workout_id' => $row['workout_id'],
    //        'instructor_id' => $row['instructor_id'],
    //        'sub_month' => $row['sub_month'],
    //        'joining_date' => Carbon::parse($row['joining_date'])->format('Y-m-d H:i:s'),
    //        'end_date' => Carbon::parse($row['end_date'])->format('Y-m-d H:i:s'),
    //        //'joining_date' => Carbon::format('d-m-Y H:i:s', $row['joining_date']),
    //        //'end_date' => Carbon::format('d-m-Y H:i:s', $row['end_date']),
    //        //'joining_date' => $row['joining_date']->date_format('d-m-Y'),
    //        //'end_date' => $row['end_date']->date_format('d-m-Y'),
    //    ]);
    //}
}
