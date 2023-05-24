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

            'new_password' => [
                'required',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'min:8',
                'same:confirm_password',
            ],
            'confirm_password' => ['required'],
        ];
    }

        public function messages()
        {
            return
            [
                'old_password.required' => 'The old password field is required.',
                'new_password.required' => 'The new password field is required.',
                'new_password.regex' => 'The new password must be strong and include at least one lowercase letter, one uppercase letter, one digit, and one special character  (e.g., aW@123456).',
                'new_password.min' => 'The new password must be at least :min characters long.',
                'new_password.same' => 'The new password and confirm password must match.',
                'confirm_password.required' => 'The confirm password field is required.',
            ];
        }
}