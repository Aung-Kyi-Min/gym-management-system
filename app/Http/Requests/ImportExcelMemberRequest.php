<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportExcelMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'file' => 'required|file|mimes:xlsx,xls',
            'user_id' => 'required',
            'workout_id' => 'required',
            'instructor_id' => 'required',
            'sub_month' => 'required',
            'joining_date' => 'required',
            'end_date' => 'required',
        ];
    }
}
