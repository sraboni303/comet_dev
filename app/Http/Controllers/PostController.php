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
        $data = Post::all();
        return view('admin.blog.index', [
            'all_data' => $data,
        ]);
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

        // dd($request->gallery);
        // dd($request->image);


        // Validation Post
        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);


        // Image & Gallery Manage
        $image_name = '';
        $gallery_names = [];

        if($request->hasFile('image')){

            $image = $request->file('image');
            $image_name = md5(time().rand()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('media/posts/', $image_name));

        }elseif($request->hasFile('gallery')){

            foreach($request->file('gallery') as $gallery){
               $gallery_name = md5(time().rand()) . '.' . $gallery->getClientOriginalExtension();
               $gallery->move(public_path('media/posts/', $gallery_name));
               array_push($gallery_names, $gallery_name);
            }
        }


        // Featured Ready
        $featured = [
            'type' => $request->radio,
            'image' => $image_name,
            'gallery' => $gallery_names,
            'video' => $request->video,
            'audio' => $request->audio,
        ];


        // Create Post
        Post::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->input('title')),
            'content' => $request->input('content'),
            'featured' => json_encode($featured),
        ]);

        return redirect()->back()->with('message', 'Post Created Successfully..');

    }


    // Status: active to inactive
    public function active($id){
        $status = Post::find($id);
        $status->status = false;
        $status->update();
    }


    // Status: inactive to active
    public function inactive($id){
        $status = Post::find($id);
        $status->status = true;
        $status->update();
    }













}
