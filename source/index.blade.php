@extends('_layouts.master')

@section('content')
    <div class="mb-8">
        <p class="text-grey-darker text-xl">Hi! I'm Jeff. I do stuff and things from Bend Oregon. </p>
    </div>

    <div class="mb-8">
        <div class="pb-2 mb-6">
            <h2 class="text-grey-darkest text-xl border-b border-grey-darkest inline">Get In Touch</h2>
        </div>

        <div class="flex items-center">
            <a class="text-green text-xl" href="mailto:quicklikurtle@gmail.com">quickliketurtle@gmail.com</a>
            <svg class="h-3 w-8 text-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.172 9l-6.071-6.071 1.414-1.414L20 10l-.707.707-7.778 7.778-1.414-1.414L16.172 11H0V9z"/></svg>
        </div>
    </div>

    <div class="pb-2 mb-6">
        <div class="pb-2 mb-6">
            <h2 class="text-grey-darkest text-xl border-b border-grey-darkest inline">Recent Posts</h2>
        </div>

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
    </div>

    <div class="pb-2 mb-6">
        <div class="pb-2 mb-6">
            <h2 class="text-grey-darkest text-xl border-b border-grey-darkest inline">Recent Projects</h2>
        </div>

        <div>
            <ul class="list-reset">
                <li class="mb-6">
                    <div class="flex items-center">
                        <a class="text-green text-xl" href="http://artprompts.co">Art Prompts</a>
                        <svg class="h-3 w-8 text-green fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.172 9l-6.071-6.071 1.414-1.414L20 10l-.707.707-7.778 7.778-1.414-1.414L16.172 11H0V9z"/></svg>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="mb-8">
        <a class="no-underline text-grey-darker hover:text-grey-darkest" href="https://github.com/quickliketurtle">
            <svg class="h-6 w-6 fill-current mr-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 0a10 10 0 0 0-3.16 19.49c.5.1.68-.22.68-.48l-.01-1.7c-2.78.6-3.37-1.34-3.37-1.34-.46-1.16-1.11-1.47-1.11-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.1-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.1.39-1.99 1.03-2.69a3.6 3.6 0 0 1 .1-2.64s.84-.27 2.75 1.02a9.58 9.58 0 0 1 5 0c1.91-1.3 2.75-1.02 2.75-1.02.55 1.37.2 2.4.1 2.64.64.7 1.03 1.6 1.03 2.69 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85l-.01 2.75c0 .26.18.58.69.48A10 10 0 0 0 10 0"/></svg>
        </a>
        <a class="no-underline text-grey-darker hover:text-grey-darkest" href="https://twitter.com/quickliketurtle">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"/></svg>
        </a>
    </div>
@endsection
