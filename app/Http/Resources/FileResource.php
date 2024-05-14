<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FileResource extends JsonResource
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
            'title' => $this->title,
            'slug' => $this->slug,
            'types_id' => $this->types_id,
            'format_id' => $this->format_id,
            'user_id' => $this->user_id,
            'group_of' => $this->group_of,
            'part_of' => $this->part_of,
            'uploaded_by' => $this->uploaded_by,
            'collaborator' => $this->collaborator,
            'used_times' => $this->used_times,
            'zip' => $this->zip,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // Дополнительные поля, если есть
        ];
    }
}
