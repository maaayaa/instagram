<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    public function index()
    {   
        $posts = Post::where('status', 1)->orderBy('created_at', 'DESC')->get();
        return view( 'index',compact('post'));
    }
    public function create()
    {
        return view('post');
    }
    public function store(Request $request)
    {
        $post = $request->all();
        $data = ['user_id' => \Auth::id(), 'title' => $post['title'], 'body' => $post['body']];
        
        Post::insert($data);

        return redirect('/');
    }
}
