<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'is_published' => ['boolean'],
            'likes' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
