<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
        return [
            "first_name" => ['required', 'regex:/^[a-zA-Z\-]+$/'],
            "last_name" => ['required', 'regex:/^[a-zA-Z\-]+$/'],
            "addresse" => ['required', 'min:10'],
            "age" => ['integer', 'between:15,18'],
        ];
    }
}
