<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255', 'unique:posts,title'],
            'description' => ['string', 'min:3'],
            'is_published' => ['boolean'],
            'likes' => ['integer'],
            'preview_image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'main_image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['integer', 'exists:tags,id'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return
        [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be a string',
            'title.min' => 'Title must be at least 3 characters',
            'title.max' => 'Title may not be greater than 255 characters',
            'title.unique' => 'Title already exists',
        ];
    }
}
