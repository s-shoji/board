<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{

    public function index(Type $var = null)
    {
        $post = Post::all();
        return view('posts/index', [
            'posts' => $post,
            // 'sumt' => $sum,
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts/show',[
            'id' => $id,
            'post' => $post
        ]);
    }
    public function create()
    {
        return view('posts/create');
    }

    public function store(Request $request)
    {
        // var_dump($_POST);
        // die();
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id  = Auth::id();
        $post->save();
        return redirect()->route('posts.index');
    }

    
}
