<?php

namespace App\Repositories;

use App\Http\Requests\PostRequest;
use App\Interfaces\PostInterface;
use App\Traits\ResponseAPI;
use App\Models\Post;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostRepository implements PostInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllPosts()
    {
        try {
            $posts = Post::all();
            return $this->success("All Posts", $posts);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function getPostById($id)
    {
        try {
            $post = Post::find($id);
            // Check the user
            if(!$post) return $this->error("No post with ID $id", 404);
            return $this->success("Post Detail", $post);
        } catch(\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function requestPost(PostRequest $request, $id = null)
    {
        DB::beginTransaction();
        try {
            // If Post exists when we find it
            // Then update the Post
            // Else create the new one.
            $post = $id ? Post::find($id) : new Post;

            // Check the Post
            if($id && !$post) return $this->error("No post with ID $id", 404);

            $post->name = $request->name;
            $post->slug = Str::slug($request->name);
            $post->created_by = auth()->id();
            $post->updated_by = $id  ? auth()->id() : NULL;
            // Save the Post
            $post->save();

            DB::commit();
            return $this->success(
                $id ? "Post updated"
                    : "Post created",
                $post, $id ? 200 : 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

    public function deletePost($id)
    {
        DB::beginTransaction();
        try {
            $post = Post::find($id);

            // Check the Post
            if(!$post) return $this->error("No post with ID $id", 404);

            // Delete the Post
            $post->delete();

            DB::commit();
            return $this->success("Post deleted", $post);
        } catch(\Exception $e) {
            DB::rollBack();
            return $this->error($e->getMessage(), $e->getCode());
        }
    }
}
