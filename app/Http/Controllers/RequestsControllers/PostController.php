<?php

namespace App\Http\Controllers\RequestsControllers;

use App\Http\Requests\StoreRequests\StorePostRequest;
use App\Http\Requests\UpdateRequests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostResource::collection(Post::with('category')->paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        return new PostResource(Post::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
//        print_r($post->id); die;
//        if ($post->active == false){
//            return response()->json([
//                "message" => "Forbidden"
//            ],403);
//        }
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->all());
        return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response(json_encode($post), 200);
    }
}
