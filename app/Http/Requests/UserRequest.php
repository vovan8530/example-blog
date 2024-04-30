<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {

        $rules = [
            'name' => ['required', 'string', 'max:255'],
//            'email' => ['required', 'email'],
            'role' => ['required', 'integer'],
        ];

        if ($this->isMethod('POST')) {
//            $rules['password'] = ['required', 'string', 'min:8'];
            $rules['email'] = ['required', 'email', 'unique:users'];
        }

        return $rules;
    }

    public function authorize(): bool
    {
        return true;
    }
}
