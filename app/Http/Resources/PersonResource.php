<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'hemis_id' => $this->hemis_id,
            'user_id' => $this->user_id,
            'department_id' => $this->department_id,
            'section_id' => $this->section_id,
            'role_id' => $this->role_id,
            'position_id' => $this->position_id,
            'avatar' => $this->avatar,
            'phone' => $this->phone,
            'active' => $this->active,
            'passport_number' => $this->passport_number,
            'passport_pin' => $this->passport_pin,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // Дополнительные поля, если есть
        ];
    }
}
