<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Interfaces\CategoryInterface;

class CategoryController extends Controller
{
    protected $CategoryInterface;
    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }

    public function store(CategoryRequest $request){
        return $this->categoryInterface->requestCategory($request);
    }
}
