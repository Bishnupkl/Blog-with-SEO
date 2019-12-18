@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{$category->name}}</h1>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-sm pull-left btn-margin-right btn-margin-right"
                           href="{{route('categories.edit',$category->id)}}">Edit</a>

                        <form  action="{{route('categories.destroy',$category->id)}}" class="blog-del" method="post">
                            {{method_field('delete')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger btn-sm pull-left btn-margin-right btn-margin-right">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

        </article>
    </div>
@endsection