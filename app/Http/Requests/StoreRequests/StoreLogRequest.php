<?php

namespace App\Http\Requests\StoreRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreLogRequest extends FormRequest
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
            'from' => 'required|string|max:255',
            'to' => 'required|string|max:255',
            'year' => 'required|integer',
            'month' => 'required|integer',
            'day' => 'required|integer',
            'user_id' => 'nullable|exists:users,id',
            'url' => 'required|string|max:255',
            'ip_address' => 'nullable|ip', // Проверка на корректный IP-адрес
        ];
    }

}
