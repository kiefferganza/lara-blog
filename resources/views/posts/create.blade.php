@extends('layouts.app')

@section('content')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
               <b>Create Post</b>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="postTitle"/>
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <input type="text" class="form-control" name="postBody"/>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>


            </div>
        </div>
    </div>


@endsection
