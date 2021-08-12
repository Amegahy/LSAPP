@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row my-3">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8 mt-3 mt-md-auto m-auto">
                        <h3>{{ $post->title }}<h3>
                        <small>Written on {{ $post->created_at->format('d/m/Y') }} by {{ $post->user->name }}</small>
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary d-block my-3 mx-auto mx-md-0">View post</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else 
        <p>No posts found. Please log in or register to create a new post.</p>
    @endif
@endsection