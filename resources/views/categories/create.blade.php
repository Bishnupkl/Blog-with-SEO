@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create Categpory </h1>
        </div>
        <div class="col-md-12">
            <form action="{{route('categories.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="title">
                </div>

                <button type="submit" class="btn btn-primary">Create a category</button>
            </form>
        </div>
    </div>
@endsection