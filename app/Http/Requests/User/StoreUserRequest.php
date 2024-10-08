<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'firstName' => 'required',
            'lastName' => 'required',
            'username' => 'required|unique:user',
            'email' => 'required|unique:user',
            'password' => 'required',
            'file' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'is_admin' => 'nullable'
        ];
    }
}
