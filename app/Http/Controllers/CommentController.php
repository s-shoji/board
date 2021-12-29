<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function create(int $id,Request $request)
    {

        $post_id = Post::find($id)->id;
        $user_id = Auth::id();
 
        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->post_id = $post_id;
        $comment->user_id = $user_id;
        $comment->save();

        return redirect()->route('posts.show',[
            'id' => $id,
        ]);
    }

    public function index(int $id,Comment $comment)
    {
        $post = Post::find($id);
        $comment = Comment::all()->where('post_id',$id);
        return view('posts/show', [
            'id' => $id,
            'post' => $post,
            'comments' => $comment,
        ]);
    }
}
