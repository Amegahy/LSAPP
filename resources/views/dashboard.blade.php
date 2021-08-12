@extends('layouts.app')

@section('content')
<div class="card">
    <h3 class="card-header text-light">Welcome, {{ $user }}</h3>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <a href="/posts/create" class="btn btn-primary my-4">Create Post</a>
        <h3>Your blog posts</h3>
        @if (count($posts) > 0)
            <table class="table d-block d-md-table overflow-auto">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($posts as $post)
                    <tr>
                        <td class="align-middle">{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td>
                            {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>   
                @endforeach
            </table>
        @else 
            <p>You have no posts</p>
        @endif
    </div>
</div>
@endsection
