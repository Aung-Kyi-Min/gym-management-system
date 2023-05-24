<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'old_password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Auth::attempt(['email' => Auth::user()->email, 'password' => $value])) {
                        $fail('The old password is incorrect.');
                    }
                },
            ],
            
            'new_password' => ['required', 'min:8', 'same:confirm_password'],
            'confirm_password' => ['required'],
        ];
    }
}

