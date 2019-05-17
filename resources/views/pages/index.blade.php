@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <p> This is a laravel application from the "Laravel From the Scratch " Youtube series </p>
        <p>
            <a class="btn btn-primary btn-lg" href="pages/login" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="pages/register" role="button">Register</a>
        </p>
    </div>

@endsection