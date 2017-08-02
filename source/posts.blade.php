@extends('_layouts.master')

@section('content')
    @foreach ($posts as $post)
    <div class="card">
        <div class="card-content">
            <p class="title">
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
            </p>
            <p class="subtitle">
                By {{ $post->author }}
            </p>
            <div class="content">
                {!! $post->getContent() !!}
            </div>
        </div>
    </div>
    @endforeach
@endsection

