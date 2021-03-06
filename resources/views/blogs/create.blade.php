@extends('layouts.app')
@section('content')
    @include('partials.tinymce')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create a new Blog</h1>
        </div>
        <div class="col-md-12">
            <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="tiltle">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" cols="30" class="form-control" rows="5"></textarea>
{{--                    <input type="text" class="form-control" name="body" id="pwd">--}}
                </div>
                <div class="form-group form-check form-check-inline">
                    @foreach($categories as $category)
                        <input type="checkbox" value="{{$category->id}}" name="category_id[]" class="form-check-input">
                        <label class="form-check-label btn-margin-right" for="category">{{$category->name}}</label>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="featured_image">Featured Image</label>
                    <input type="file" name="featured_image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Create a Blog</button>
            </form>
        </div>
    </div>
@endsection