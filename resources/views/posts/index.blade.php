@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered table-striped table-hover">
        <thead class="bg-primary text-white">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <th>{{ $post->id }}</th>
            <td>{{ $post->title }}</td>
            <td>
                <button class="btn btn-info text-white modalPop" id="postShow" 
                    data-id="{{ $post->id }}"
                    data-title='btnShow'>Show</button>
                <button class="btn btn-success text-white modalPop" id="postEdit" 
                    data-id="{{ $post->id }}"
                    data-title='btnEdit'>Edit</button>
                <button class="btn btn-danger text-white modalPop" id="postDelete" 
                    data-id="{{ $post->id }}"
                    data-title='btnDelete'>Delete</button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


@include('posts.js')
@include('posts.modal')
@endsection
