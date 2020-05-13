@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img
                    src="{{ $user->profile->profileImage() }}"
                    class="rounded-circle w-100"
                    style="width: 200px"
                >

            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    @can('update',$user->profile)
                        <a href="/posts/create">Add new Post</a>
                    @endcan

                </div>
                @can('update',$user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4p">
                    <a href="/posts/{{ $post->id }}"> <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
