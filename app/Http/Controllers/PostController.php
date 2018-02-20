<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    public function index()
    {
    	$post=new Post;
    	$data=$post->select('id','title')->get();
    	return view('allpost',compact('data'));
    }
    public function show()
    {
    	return view('post');
    }
    public function create(Request $request)
    {
    	$validation=$request->validate(['title'=>'required','descr'=>'required']);
    	$post =new Post;
    	$post->title=$request['title'];
    	$post->descr=$request['descr'];    	
    	$post->save();
    	return redirect('/post');
    	//return view('post');
    }
    public function showdetail($id)
    {
    	$post =new Post;
    	$data=$post->where('id',$id)->select('title','descr')->get();
    	return  view('showdetail',compact('data'));
    	//return view('post');
    }
    public function sample()
    {
        
    }

}

