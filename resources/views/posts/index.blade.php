@extends('layouts.app')

@section('content')
    
    <h1>Posts </h1>
    <hr>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            
            <div class="shadow-none p-3 mb-5 bg-light rounded">
                <h3 class="blog-post-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small class="blog-post-meta"> Written on {{$post->created_at}} by {{$post->user->name}}</small>

            </div>
            <hr>
        @endforeach
    @else
        <p>No posts found !</p>
    @endif

@endsection