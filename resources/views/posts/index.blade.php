<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between mt-4 p-6 space-x-5">
            {{ __('Post') }}
            <!-- <a href="{{ route('posts.create') }}">{{ __('TweetCreate') }}</a> -->
        </h2>  
        <a href="{{ route('posts.create') }}">{{ __('PostCreate') }}</a><br>
        <a href="{{ route('users.index') }}">{{ __('User') }}</a><br>   
        <h2>今月の累計投稿数は{{$sum}}です。</h2>  
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @foreach($posts as $post)
                <div class="text-center text-2xl" >
                <a class="show_link" href="{{ route('posts.show', ['id' => $post->id]) }}">id{{$post->id}}</a><br>
                  
                  title:
                  {{$post->title}} <br>
                  content:
                  {{$post->content}} <br>
                  created_at:
                  {{$post->created_at}} <br>
                  user_name:
                  {{$post->user->name}}<br><br>
                  @endforeach
                </div>
             
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
