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

    }
    public function store(PostRequest $request){
      dd($request->all());
    }

}
