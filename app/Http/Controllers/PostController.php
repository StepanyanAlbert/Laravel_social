<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function postcreatepost(Request $request){
        $this->validate($request,[
           'body'=>'required|max:1000'
        ]);
        $post=new Post();
        $post->body=$request['body'];
        $message='There was an error';
        if($request->user()->posts()->save($post)){
        $message='Post successfully created';
        }
        return redirect()->route('dashboard')->with(['message'=>$message]);
    }
    public function getdashboard(){
        $posts=Post::all();
        return view('dashboard',['posts'=>$posts]);
    }
}
