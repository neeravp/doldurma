@extends('layouts.app')

@section('content')
    <section>
        <div class="py-2 mb-20">
            <a href="/" class="px-4 py-2 bg-blue-500 bg-blue-200">Back</a>
        </div>
        @foreach ($posts as $post)
            <article>
                <h1 class="text-2xl text-gray-700">{{ $post->title }}</h1>
                <div class="text-gray-500">
                    {!! $post->description !!}
                </div>
            </article>
        @endforeach
    </section>
@endsection