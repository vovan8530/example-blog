<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:categories,title'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
