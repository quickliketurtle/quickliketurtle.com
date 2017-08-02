@extends('_layouts.master')

@section('content')
    <div class="card">
        <div class="card-content">
            <p class="title">
                {{ $page->title }}
            </p>
            <p class="subtitle">
                By {{ $page->author }}
            </p>
            <div class="content">
                @yield('postContent')
            </div>
        </div>
    </div>
@endsection
