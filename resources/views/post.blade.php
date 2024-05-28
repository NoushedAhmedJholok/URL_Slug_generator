@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 m-auto">
              <div class="card">
                <div class="card-header">
                    <h3>ALL Post here</h3>
                </div>
                <div class="card-body">
                    <table class="table table-dark">
                        <tr>
                            <th>#ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Show</th>
                        </tr>
                        @foreach ($posts as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td><textarea name="" id="" cols="30" rows="0">{{$item->content}}</textarea></td>
                                <td><a class="btn btn-info" href="{{url('/post/single/')}}/{{$item->slug}}">Show Post</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
