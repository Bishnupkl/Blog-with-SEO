@extends('layouts.app')
@section('content')
    @include('partials.meta_static')
    <div class="container">
        @foreach($blogs as $key=>$blog)
        <h2><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h2>
        {!! $blog->body !!}
        @endforeach
    </div>
@endsection