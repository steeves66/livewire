<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\EditPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
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
        return redirect()->route('postIndex')->with('success', 'Post created successfully');
    }
    
    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    
    public function update(EditPostRequest $editRequest, $id) {
        $post = Post::findOrfail($id);
        $post->update([
            'title' => $editRequest->title,
            'description' => $editRequest->description,
            'is_active' => isset($editRequest->is_active) ? 1 : 0
        ]);
        return redirect()->route('postIndex')->with('success', 'Updated sussccessfully');
    }
    
    public function delete($id) {
        Post::destroy($id);
        return redirect()->route('postIndex')->with('success', 'deleled successfully');
    }
}









