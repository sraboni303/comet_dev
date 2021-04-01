<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Index
    public function index(){
        return view('admin.blog.index');
    }

    // Create
    public function create(){

        $tag = Tag::all();
        $category = Category::all();

        return view('admin.blog.create', [
            'tags' => $tag,
            'categories' => $category,
        ]);
    }
}
