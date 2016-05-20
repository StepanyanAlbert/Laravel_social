<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

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
    public function getdashboard()
    {
        $posts=Post::orderBy('created_at','desc')->get();
        return view('dashboard',['posts'=>$posts]);
    }
    public function getpostdelete($post_id)
    {
        $post=Post::where('id',$post_id)->first();
        if(Auth::user() != $post->user){
            return redirect()->back();
        }
        $post->delete();
        return redirect()->route('dashboard')->with(['message'=>'Post was successfully delete']);
    }
}