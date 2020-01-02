@extends('layouts.app')
@section('content')
    <div class="container">
    @foreach($categories as $key=>$category)
        <h2><a href="{{route('categories.show',$category->slug)}}">{{$category->name}}</a></h2>
        <p>{{$category->slug}}</p>
    @endforeach
    </div>
@endsection