<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rule_email_unique = Rule::unique('users', 'email');

        if($this->method() != 'POST') {
            $rule_email_unique->ignore($this->user->id, 'id');
            return [
                'name'              => ['required'],
                'email'             => ['required','email',$rule_email_unique],
                'phone'             => ['nullable'],
                'is_active'         => ['required']
            ];
        }

        return [
            'name'              => ['required'],
            'email'             => ['required','email',$rule_email_unique],
            'phone'             => ['required'],
            'password' => [
                'required',
                'same:confirm-password',
                'regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z0-9]).{8,}$/'
            ],

            'confirm-password'  => ['required'],
            'role' => 'required|array',
            'role.*' => 'exists:roles,id',
            'remarks'           => ['nullable'],
            'is_active'         => ['required']
        ];
    }


    protected function prepareForValidation()
    {
        $this->merge([
            'is_active' => (int)$this->request->has('is_active') ? $this->is_active : 0
        ]);
    }

    public function messages()
{
    return [
        'password.regex' => 'Password must be at least 8 characters long and include at least one uppercase letter, one number, and one special character.',
        'password.same'  => 'Password and confirm password must match.',
    ];
}
}
