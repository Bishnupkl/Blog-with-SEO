@extends('layouts.app')
@section('content')
    <div class="container-fluid">
    <div class="jumbotron">
        <h1>Admin Dashboard</h1>
    </div>
        <div class="col-md-12">
                <a href="{{route('blog.create')}}" class="btn btn-primary btn-xs pull-left btn-margin-right btn-margin-right">Create Blogs</a>

                <a href="{{route('blog.trash')}}" class="btn btn-danger btn-xs pull-left btn-margin-right btn-margin-right">Trashed Blogs</a>
        </div>
    </div>




@endsection