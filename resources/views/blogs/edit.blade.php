@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit Blog</h1>
        </div>
        <div class="col-md-12">
            <form action="{{route('blog.update')}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tiltle">Title</label>
                    <input type="email" value="{{$blog->title}}" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body"  cols="30"  class="form-control" rows="5">{{$blog->body}}</textarea>
                    {{--                    <input type="text" class="form-control" name="body" id="pwd">--}}
                </div>
                <button type="submit" class="btn btn-primary">Create a Blog</button>
            </form>
        </div>
    </div>
@endsection