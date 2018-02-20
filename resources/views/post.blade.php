@extends('layout.master')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="content">
            <h1 class="h2">Dashboard</h1>
            
            <form method='POST' action="/post">
  <div class="form-group" >
    {{csrf_field()}}
    <label for="exampleFormControlInput1">Email address</label>
    <input type="title" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="descr" name="descr" rows="3"></textarea>
  </div>
   <div class="form-group">
  <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</div>
</form>
@if($errors->all())
<div class="alert alert-danger">
    <ul>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
</div>
@endif

          </div>

        </main>
@endsection        