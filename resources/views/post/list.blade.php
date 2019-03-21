@extends('welcome')

@section('content')

    <h1>My Blog</h1>
    @if(Session::has('success'))
        <h5 class="text-primary">{{ Session::get('success')}}</h5>
    @endif

    @if(isset($message))
        <h5 class="text-primary">{{ $message }}</h5>
    @endif
    <div class="d-flex flex-row-reverse bd-highlight">
        <i class="icon ion-md-add"></i>
        <a href="{{ route('post.create') }}">
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">add</i>
            </button>
        </a>
    </div>
    <div class="row">
        <table class="col-12 table table-striped">
            <thead>
            <tr class="text-center" style="font-size: 20px">
                <td>Title</td>
                <td>Content</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            {{--{{dd($posts)}}--}}
            @foreach($posts as $post)
                <tr>
                    <td><a href="{{ route('post.show',$post->id)}}">{{$post->title}}</a>
                    </td>
                    <td>{{$post->content}}</td>
                    <td><a href="{{ route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ route('post.destroy',$post->id) }}" class="btn btn-danger"
                           onclick="return confirm('Bạn có muốn xoá ? ')">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
