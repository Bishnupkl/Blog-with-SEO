@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create Categpory/h1>
        </div>
        <div class="col-md-12">
            <form action="#" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>

                <button type="submit" class="btn btn-primary">Create a Blog</button>
            </form>
        </div>
    </div>
@endsection