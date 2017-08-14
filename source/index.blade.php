@extends('_layouts.master')

@section('content')

    <section>
        <div class="center-50">
            @foreach ($posts as $post)
            <ul class="post-list">
                <li class="post-list-item">
                    <aside class="is-size-6">{{ date('F j, Y', $post->date) }}</aside>
                    <div>
                        <a class="is-size-3" href="{{ $post->getPath() }}">{{ $post->title }}</a>
                    </div>
                </li>
            </ul>
            @endforeach
        </div>
    </section>
@endsection
