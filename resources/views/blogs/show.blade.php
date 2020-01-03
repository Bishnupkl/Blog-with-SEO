@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <div class="col-md-12">
                    @if($blog->featured_image)
                        <img src="/images/featured_images/{{$blog->featured_image ? $blog->featured_image : ''}}" alt="{{str_limit($blog->title,50)}}" class="img-responsive featured_image">
                    @endif
                </div>
                <h1>{{$blog->title}}</h1>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-sm pull-left btn-margin-right btn-margin-right"
                           href="{{route('blog.edit',$blog->id)}}">Edit</a>

                        <form  action="{{route('blog.delete',$blog->id)}}" class="blog-del" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-sm pull-left btn-margin-right btn-margin-right">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p>{{$blog->body}}</p>
                <hr>
                <p><b>Category</b>:
                @foreach($blog->category as $category)
                    <span><a href="{{route('categories.show',$category->slug)}}">{{$category->name}}</a></span>

                @endforeach
                </p>

            </div>
        </article>
    </div>
@endsection