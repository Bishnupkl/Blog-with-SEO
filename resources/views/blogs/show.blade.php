@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{$blog->title}}</h1>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-xs pull-left btn-margin-right btn-margin-right"
                           href="{{route('blog.edit',$blog->id)}}">Edit</a>

                        <form  action="{{route('blog.delete',$blog->id)}}" class="blog-del" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-xs pull-left btn-margin-right btn-margin-right">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p>{{$blog->body}}</p>
            </div>
        </article>
    </div>
@endsection