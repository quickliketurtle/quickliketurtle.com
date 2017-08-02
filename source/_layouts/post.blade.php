@extends('_layouts.master')

@section('content')
    <h1 class="title">{{ $page->title }}</h1>
    <p class="subtitle">by {{ $page->author }}</p>

    <div class="content">
        @yield('postContent')
    </div>
@endsection
