@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Trashed Blogs</h1>
        </div>
    </div>

    <div class="col-md-12">
        @foreach($trashedBlogs as $key=>$blog)
            <h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
            <p>{{$blog->body}}</p>

        {{--restore blogs--}}

            <form method="get" action="{{route('blog.restore',$blog->id)}}">
                {{csrf_field()}}
                <button class="btn btn-success btn-xs pull-left btn-margin-right">
                    Restore
                </button>
            </form>

            {{--permanent delete--}}
            <form method="POST" action="{{route('blog.permanent-delete',$blog->id)}}">
                    {{method_field('delete')}}
                {{csrf_field()}}
                <button class="btn btn-danger btn-xs pull-left btn-margin-right">
                    Permanent Delete
                </button>
            </form>
        @endforeach


    </div>


@endsection