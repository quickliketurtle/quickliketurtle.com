@extends('_layouts.master')

@section('content')
    <h1 class="text-dark">Blog Posts</h1>

    @foreach ($posts as $post)
        <div class="card">
            <div class="card-section">
                <h2 class="text-dark"><a href="{{ $post->getPath() }}">{{ $post->title }}</a></h2>
                <h3 class="text-dark-soft text-sm">By {{ $post->author }}</h3>
                <div class="posts-page">
                    {!! $post->getContent() !!}
                </div>
            </div>
        </div>
    @endforeach
@endsection

