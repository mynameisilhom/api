<?php

namespace App\Http\Requests\UpdateRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateNews_EnRequest extends FormRequest
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
            'slug' => 'required|string|max:255|unique:news_ens,slug', // Уникальный slug в таблице news_ens
            'content' => 'required|string',
            'likes' => 'required|integer|min:0',
            'file_id' => 'nullable|exists:files,id',
            'user_id' => 'nullable|exists:users,id',
            'views' => 'integer|min:0',
            'published' => 'boolean',
        ];
    }
}
