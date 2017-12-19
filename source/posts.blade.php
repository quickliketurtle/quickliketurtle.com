@extends('_layouts.master')

@section('content')
    <div>
        <ul class="list-reset">
            @foreach ($posts as $post)
            <li class="mb-6">
                <div class="text-grey-darker text-md italic">{{ date('F j, Y', $post->date) }}</div>
                <div class="flex items-center">
                    <a class="text-green text-xl" href="{{ $post->getPath() }}">{{ $post->title }}</a>
                    <svg class="h-3 w-8 text-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.172 9l-6.071-6.071 1.414-1.414L20 10l-.707.707-7.778 7.778-1.414-1.414L16.172 11H0V9z"/></svg>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection

