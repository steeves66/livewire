<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        
    }
    
    public function create() {
        return view('posts.create');
    }
    
    public function store(CreatePostRequest $postRequest) {
        Post::create([
            'title' => $postRequest->title,
            'description' => $postRequest->description,
            'is_active' => isset($postRequest->is_active) ? 1 : 0
        ]);
//         flash("Post created successfully");
        return redirect()->route('postIndex');
    }
}
