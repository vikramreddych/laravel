@extends('layout.master')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="content">
            <h1 class="h2">All Posts</h1>
          </div>
          <ul>
          @foreach($data as $res)
          <li><a href="/post/{{$res->id}}">{{$res->title}}</a> -  <a href="/post/{{$res->id}}/delete">Delete</a></li>
          @endforeach
        </ul>
        </main>
@endsection        