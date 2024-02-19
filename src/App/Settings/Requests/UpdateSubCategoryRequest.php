<?php

namespace App\Settings\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSubCategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|boolean',
        ];
    }
}
