<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class PostApiController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
    }

    public function show($id) {
        return Post::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        if ($request->isMethod('put')) {
            $post->update($request->all());
        }
        elseif ($request->isMethod('patch')) {
            $post->where('id', $id)->update(array('title' => 'hung 123'));
        }
        return $post;
    }

    public function destroy($id) {
        if($id != null) {
            $post = Post::findOrFail($id);
            $post->delete();
        }
    }
}
