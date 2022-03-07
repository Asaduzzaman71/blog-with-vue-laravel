<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Interfaces\PostInterface;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    protected $postInterface;
    public function __construct(PostInterface $postInterface)
    {
        $this->postInterface = $postInterface;
    }
    public function index(){
        return $this->postInterface->getAllPosts();
    }
    public function store(PostRequest $request){
        return $this->postInterface->requestPost($request);
    }
    public function update(PostRequest $request, $id){
        return $this->postInterface->requestPost($request, $id);
    }
    public function deleteImage($id){
        return $this->postInterface->deletePostImage($id);
    }
    public function destroy($id)
    {
        return $this->postInterface->deletePost($id);
    }

}
