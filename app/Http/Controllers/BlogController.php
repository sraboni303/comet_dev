<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlogPage(){
        $posts = Post::where('status', true)->where('trash', false)-> latest()->paginate(3);
        return view('frontend.blog', [
            'posts' => $posts
        ]);
    }


    public function showSinglePost($id){

        $post_id = Post::find($id);
        return view('frontend.blog-single', [
            'single_post' => $post_id,
        ]);

    }



}
