@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-right pb-3">
                <a class="btn btn-info text-white" href="{{ route('posts.create') }}">Create Posts</a>

            </div>
            @foreach($posts as $post)
                <div class="pb-3">
                    <div class="card">
                        <p class="pl-2"><b></b></p>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->body }}</p>
                            <p class="card-text">
                                <small class="text-muted">Created by {{ $post->user->name }} on {{ date('jS M Y', strtotime($post->created_at)) }}</small>
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
