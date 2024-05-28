@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
              <div class="card">
                <div class="card-header">
                    <h3>Here Is Single Post</h3>
                </div>
                <div class="card-body">
                    @foreach ($single_post as $item)
                    <h1>{{$item->title}}</h1>
                    <p>{{$item->content}}</p>
                    @endforeach
                    
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
