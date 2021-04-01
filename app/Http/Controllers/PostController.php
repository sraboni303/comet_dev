<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
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


    // Store
    public function store(Request $request){

        // Validation Post
        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);

        // Create Post
        Post::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
        ]);

        return redirect()->back()->with('message', 'Post Created Successfully..');
    }
}
