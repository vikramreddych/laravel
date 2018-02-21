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
    public function create()
    {
    	return view('post');
    }
    public function store(Request $request)
    {
    	$validation=$request->validate(['title'=>'required','descr'=>'required']);
    	$post =new Post;
    	$post->title=$request['title'];
    	$post->descr=$request['descr'];    	
    	$post->save();
    	return redirect('/');
    	//return view('post');
    }
    public function show($id)
    {
    	$post =new Post;
    	$data=$post->where('id',$id)->select('title','descr')->get();
    	return  view('showdetail',compact('data'));
    	//return view('post');
    }

    public function edit($id)
    {
        //$post=new Post;
        $data = Post::findorFail($id);
        //$data=$post->where('id',$id)->select('title','descr')->get();
        return view('postedit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $validation=$request->validate(['title'=>'required','descr'=>'required']);
        $post=Post::findorFail($id);
        $post->title=$request['title'];
        $post->descr=$request['descr'];
        $post->save();
        return redirect('/');
       
    }



    public function destroy($id)
    {
        //$post =new Post;
        $post = Post::findorFail($id);
        $post->delete();
        //$data=$post->where('id',$id)->delete();
        return redirect('/');
    }
}

