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
            'hemis_id' => 'required|integer|unique:departments',
            'name' => 'required|string',
            'code' => 'required|string|max:10|unique:departments',
            'info' => 'nullable|string',
            'phone' => 'nullable|string',
            'structure_type_name' => 'nullable|string|unique:departments',
            'structure_type_code' => 'nullable|string|unique:departments',
            'locality_type_name' => 'nullable|string|unique:departments',
            'locality_type_code' => 'nullable|string|unique:departments',
            'parent_id' => 'nullable|exists:departments,hemis_id',
            'active' => 'boolean',
        ];
    }
}
