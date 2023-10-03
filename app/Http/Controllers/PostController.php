<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getAll(){
        return view('frontend.blog.posts',[
            'posts'=> Post::all()
        ]);
    }

    public function get(Post $post){
        return view('frontend.blog.post',[
            'post' => $post
        ]);
    }
    public function store(PostRequest $request){

        $post = $request->validated();

        Post::create($post);

        return redirect('/');
    }
}
