<?php

namespace App\Http\Requests\UpdateRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartmentRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'info' => 'nullable|string',
            'phone' => 'required|string|max:20',
            'code' => 'required|string|size:10|unique:departments',
            'structure_type_name' => 'nullable|string|max:255',
            'structure_type_code' => 'nullable|string|max:255',
            'locality_type_name' => 'nullable|string|max:255',
            'locality_type_code' => 'nullable|string|max:255',
            'active' => 'boolean',
        ];
    }
}
