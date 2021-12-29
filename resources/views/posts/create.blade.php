@extends('layouts.app')

@section('content')
 <a href="{{ route('posts.index') }}">{{ __('Post') }}</a>
<div style="width:50%; margin: 0 auto; text-align:center;">
    <form action="{{ route('posts.create') }}" method="POST">
    @csrf
        <div>
            タイトル：
            <input name="title" placeholder="タイトルの入力欄"/>
        </div>
        <div>
            <textarea name="content" placeholder="内容の入力"></textarea>
        </div>
        <button>送信</button>
    </form>
</div>

@endsection