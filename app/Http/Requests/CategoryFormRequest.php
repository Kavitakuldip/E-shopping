<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'slug' => ['required','string'],
            'description' => ['required'],
            'image' => ['nullable','mimes:jpg,jpeg,png'],
            'meta_title' => ['nullable'],
            'meta_keyword' => ['nullable'],
            'meta_description' => ['nullable'],
        ];
    }
}