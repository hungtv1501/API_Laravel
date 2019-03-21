<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.list',compact('posts'));
    }


    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->save();
        return redirect()->route('post.index');

    }


    public function show($id)
    {
        $posts = Post::findOrfail($id);
        return view('post.show', compact('posts'));
    }


    public function edit($id)
    {
        $posts = Post::findOrfail($id);
        return view('post.edit', compact('posts'));
    }


    public function update(Request $request, $id)
    {
        $posts = Post::findOrfail($id);
        $posts->title = $request->input('title');
        $posts->content = $request->input('content');
        $posts->save();
        return redirect()->route('post.index');

    }


    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        Session::flash('success', 'Xóa bài viết thành công');
        return redirect()->route('post.index');
    }
}
