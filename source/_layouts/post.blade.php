@extends('_layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>
    <p>by {{ $page->author }}</p>

    @yield('postContent')
@endsection
