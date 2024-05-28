@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
              <!-- Default form -->
      <form action="{{route('postcreate')}}" method="post" class='pad-bg' enctype="multipart/form-data">
        @csrf
        <h1 class="text-center">Post with Auto URL Blug</h1>
        <div class="form-group">
          <label for="">Title</label>
          <input name="title" type="text" class="i-box form-control input-lg" />
        </div>
        <div class="form-group">
          <label for="">Content</label>
          <input name="content" type="text" class="form-control input-lg" />
        </div>
        <button class="btn btn-success mt-3 w-100 btn-lg">Add Post</button>
        <a href="{{route('post')}}" class="btn btn-info mt-3 w-100 btn-lg">Show All Post</a>
      </form>
        </div>
    </div>
</div>
@endsection
