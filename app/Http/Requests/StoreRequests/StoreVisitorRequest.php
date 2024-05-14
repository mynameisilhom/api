<?php

namespace App\Http\Requests\StoreRequests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreVisitorRequest extends FormRequest
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
            'site' => 'required|integer|min:0',
            'uz' => 'required|integer|min:0',
            'ru' => 'required|integer|min:0',
            'en' => 'required|integer|min:0',
            'auto' => 'required|integer|min:0',
            'machine' => 'required|integer|min:0',
            'electrics' => 'required|integer|min:0',
            'logistics' => 'required|integer|min:0',
            'intellectual' => 'required|integer|min:0',
            'economics' => 'required|integer|min:0',
        ];
    }

}
