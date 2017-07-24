@extends('_layouts.master')

@section('content')
    <h1>Blog Posts</h1>

    @foreach ($posts as $post)
        <h2><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
        <h3>By {{ $post->author }}</h3>
        {!! $post->getContent() !!}
    @endforeach
@endsection

