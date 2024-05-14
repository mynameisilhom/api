<?php

namespace App\Http\Requests\StoreRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFileRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:files,slug', // Уникальный slug в таблице files
            'author_id' => 'nullable|exists:users,id',
            'user_id' => 'nullable|exists:users,id',
            'types_id' => 'nullable|exists:types,id',
            'format_id' => 'nullable|exists:formats,id',
            'group_of' => 'required|integer',
            'part_of' => 'required|integer',
            'used_times' => 'required|integer|min:0',
            'zip' => 'required|string', // Предполагается, что это имя файла
            'active' => 'boolean',
        ];
    }

}
