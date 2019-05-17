@extends('layouts.app')

@section('content')
    
    <a href="/posts" class="btn btn-dark"> Go Back </a>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-dark"> Edit </a>
    <hr>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small> Written on {{$post->created_at}}</small>
@endsection