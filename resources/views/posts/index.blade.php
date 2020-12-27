@extends('layouts.app')

@section('content')
    <section>
        <div class="py-2 mb-6">
            <a href="/" class="px-4 py-2 bg-blue-500 bg-blue-200">Back</a>
        </div>
        <div class="py-2 mb-16">
            <h1 class="text-2xl text-blue-500">Posts for {{ $user->name }}</h1>
        </div>

        <br/>
        <ul>
            @foreach ($categories as $category)
                <p>{{ $category->name }}</p>
                @foreach($category->subcategories as $subcategories)
                    @include('posts.child',['child'=>$subcategories])
                @endforeach
            @endforeach
        </ul>
    </section>
@endsection
