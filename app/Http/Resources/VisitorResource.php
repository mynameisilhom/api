<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VisitorResource extends JsonResource
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
            'site' => $this->site,
            'uz' => $this->uz,
            'ru' => $this->ru,
            'en' => $this->en,
            'auto' => $this->auto,
            'machine' => $this->machine,
            'electrics' => $this->electrics,
            'logistics' => $this->logistics,
            'intellectual' => $this->intellectual,
            'economics' => $this->economics,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // Дополнительные поля, если есть
        ];
    }
}
