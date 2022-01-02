@extends('layouts.app')

@section('content')
<div style="width:50%; margin: 0 auto; text-align:center;">
<a href="{{ route('posts.index') }}">{{ __('Post') }}</a><br>
id:
                  {{$post->id}} <br>
                  title:
                  {{$post->title}} <br>
                  content:
                  {{$post->content}} <br>
                  user_name:
                  {{$post->user->name}}

                  <br><br><br>
  <form action="{{ route('comments.create',['id' => $post->id])  }}" method="POST">
    @csrf
        <div>
           
        </div>
        <div>
        <label for="comment" :value="__('Comment')">

<textarea id="comment" class="block mt-1 w-full" type="text" name="comment" required autofocus></textarea>
        </div>
        <button>送信</button>
  </form>

  <br><br><br>

  @if((count($comments) === 0))
               <p class="text-sm">{{ __('no comment')}}</p>
               @else
                @foreach($comments as $comment)
                        <div class="text-center text-2xl" >
                            id: {{$comment->id}} <br>
                            Comment: {{$comment->comment}}<br>
                            created_at: {{$comment->created_at}}<br>
                            user_name: {{$comment->user->name}}<br><br>
                        </div>
                @endforeach
   @endif
 
</div>
