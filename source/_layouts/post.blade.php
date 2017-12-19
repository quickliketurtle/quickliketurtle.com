@extends('_layouts.master')

@section('content')
    <div class="mb-8">
        <div class="text-md text-grey-dark italic">
            {{ date('F j, Y', $page->date) }}
        </div>

        <div class="text-grey-darkest text-xl font-bold">
            {{ $page->title }}
        </div>
    </div>

    <div class="markdown mb-8">
        @yield('postContent')
    </div>

    <div>
        <a class="text-green no-underline" href="/">Back</a>
    </div>
@endsection
