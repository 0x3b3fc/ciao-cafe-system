<?php

namespace App\Users\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|unique|email',
            'password' => 'required|min:8',
        ];
    }
}
