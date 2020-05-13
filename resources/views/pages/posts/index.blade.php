@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-4 border">
                    <a href="{{ $post->id }}">
                        <h3>{{ $post->title }}</h3>
                        <img src="/storage/{{ $post->image }}" style="width: 200px">
                    </a>
                    <p>Posted on {{ $post->created_at }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p>No posts Found</p>
    @endif
@endsection
