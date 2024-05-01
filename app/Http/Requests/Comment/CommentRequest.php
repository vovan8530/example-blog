<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'message' => ['required', 'string', 'min:3'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
