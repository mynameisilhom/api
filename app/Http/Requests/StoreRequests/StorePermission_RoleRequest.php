<?php

namespace App\Http\Requests\StoreRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePermission_RoleRequest extends FormRequest
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
            'role_id' => 'nullable|exists:roles,id',
            'permission_id' => 'nullable|exists:permissions,id',
            'active' => 'boolean',
        ];
    }

}
