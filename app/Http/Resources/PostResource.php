<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
//            'content' => $this->content,
//            'content' => $this->mergeWhen(Route::currentRouteNamed('posts.show'), $this->content),// будет показывать только при запрашивании самого поста
            'content' => $this->when(Route::currentRouteName() == 'posts.show', $this->content),// будет показывать только при запрашивании самого поста
            'category_id' => $this->category_id,
            'category_name' => $this->category->title,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::parse($this->updated_at)->format('Y-m-d H:i:s'),
        ];
//        return parent::toArray($request);
    }
}
