@extends('layouts.app')
@section('content')


    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit Blog</h1>
        </div>
        <div class="col-md-12">
            <form action="{{route('blog.update',$blog->id)}}" method="post">
                {{method_field('patch')}}
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tiltle">Title</label>
                    <input type="text" value="{{$blog->title}}" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body"  cols="30"  class="form-control" rows="5">{{$blog->body}}</textarea>
                    {{--                    <input type="text" class="form-control" name="body" id="pwd">--}}
                </div>
                <div class="form-group form-check form-check-inline">
                    {{$blog->category->count() ? 'Current categories':''}} &nbsp;&nbsp;&nbsp;
                    @foreach($blog->category as $category)
                        <input type="checkbox" value="{{$category->id}}" name="category_id[]" class="form-check-input") checked>
                        <label class="form-check-label btn-margin-right" for="category">{{$category->name}}</label>
                    @endforeach
                </div>

                <div class="form-group form-check form-check-inline">
                    {{$filtered->count() ? 'Unused categories':''}} &nbsp;&nbsp;&nbsp;
                    @foreach($filtered as $cat)
                        <input type="checkbox" value="{{$cat->id}}" name="category_id[]" class="form-check-input") >
                        <label class="form-check-label btn-margin-right" for="category">{{$cat->name}}</label>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection