]@extends('welcome')
@section('title', 'add new')
@section('content')
    <div class="col -12">
        <h2>CREATE POST</h2>
    </div>
    <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><h4>Title</h4></label>
            <input name="title" class="form-control" placeholder="title">
        </div>
        <div class="form-group">
            <label><h4>Content</h4></label>
            <input name="content" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('post.index')}}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
