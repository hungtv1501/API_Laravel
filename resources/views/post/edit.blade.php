
@extends('welcome')
@section('content')
    <div class="card-uper">
        <div class="card-header">
            <h1>EDIT POST</h1>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('post.update', $posts->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                </div>
                <div class="form-group">
                    <label>Content:</label>
                    <input name="content" class="form-control" type="text" value="{!!$posts->content!!}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('post.index')}}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection

