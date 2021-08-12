@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mb-4">Back to posts</a>
    <h1>{{ $post->title }}</h1>
    <div class="col-md-7 col-sm-6 my-5 mx-auto">
        <img src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <div>
        {!! $post->body !!}
        <hr>
    </div>
    <small>Written on {{ $post->created_at->format('d/m/Y') }} by {{ $post->user->name }}</small>
    
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <hr>
            <div class="row">
                <div class="col-md-6 mb-md-0 col-12 mb-4 text-center">
                    <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit post</a>
                </div>
                <div class="col-md-6 col-sm-12 text-center">
                    {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete post', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        @endif
    @endif
@endsection