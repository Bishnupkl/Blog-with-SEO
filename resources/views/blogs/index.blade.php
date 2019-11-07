@extends('layouts.app')
@section('content')
@foreach($blogs as $key=>$blog)
<h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
<p>{{$blog->body}}</p>
@endforeach
@endsection