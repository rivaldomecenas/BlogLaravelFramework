@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-dark"> Create Post </a>
                    <h3> Your Blog Post</h3>
         
                        @if(count($posts)>0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Edited At</th>
                                        <th scope="col">Action</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                            @foreach ($posts as $post)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$post->title}}</th>
                                        <td>{{$post->updated_at}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" type="submit" class="btn btn-dark">Edit</a></td>
                                        <td>{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method','DELETE')}}
                                                {{Form::submit('Delete', ['class'=>'btn btn-dark'])}}
                                            {!!Form::close()!!}                                       
                                        </td>
                                        @endforeach
                                    </tr>
                                </tbody>
                            </table>
                        @else
                        <p>No posts found !</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

