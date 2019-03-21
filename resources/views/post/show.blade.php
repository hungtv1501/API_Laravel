@extends('welcome')
@section('content')
    <button type="button" class="close" aria-label="Close" onclick="window.history.go(-1); return false;">
        <span aria-hidden="true">&times; </span>
    </button>

    <div class="jumbotron">
        <p class="display-4">
        <div class=" row col-12">
            <div class="col-9 ">
                <h1 style="color: navy">
                    {{$posts->title}}
                </h1>
                {{$posts->created_at}}
            </div>



        </div>
        <hr class="my-4">
        <p>{!!$posts->content!!}</p>

    </div>
    <a href="{{route('post.index')}}" class="btn btn-secondary">Back</a>
@endsection
