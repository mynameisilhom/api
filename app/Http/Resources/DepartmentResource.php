<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'name' => $this->name,
            'info' => $this->info,
            'phone' => $this->phone,
            'code' => $this->code,
            'structure_type_name' => $this->structure_type_name,
            'structure_type_code' => $this->structure_type_code,
            'locality_type_name' => $this->locality_type_name,
            'locality_type_code' => $this->locality_type_code,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // Дополнительные поля, если есть
        ];
    }
}
