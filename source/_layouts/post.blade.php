@extends('_layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>
    <p>by {{ $page->author }}</p>

    <div class="posts-page">
        @yield('postContent')
    </div>
@endsection
