<?php

namespace App\Http\Requests\UpdateRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonRequest extends FormRequest
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
            'user_id' => 'nullable|exists:users,id',
            'department_id' => 'nullable|exists:departments,id',
            'section_id' => 'nullable|exists:sections,id',
            'position_id' => 'nullable|exists:positions,id',
            'role_id' => 'nullable|exists:roles,id',
            'avatar' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20', // Уточните максимальную длину
            'passport_number' => 'nullable|string|unique:people,passport_number|max:255', // Уникальный номер паспорта в таблице people
            'passport_pin' => 'nullable|integer|unique:people,passport_pin', // Уникальный PIN паспорта в таблице people
            'active' => 'boolean',
        ];
    }
}
