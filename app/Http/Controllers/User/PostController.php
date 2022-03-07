<?php

namespace App\Http\Controllers\User;
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
    public function getPostByCategory($id){
        return $this->postInterface->getPostsByCategoryId($id);
    }


}

