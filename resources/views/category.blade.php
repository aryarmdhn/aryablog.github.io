
@extends('layouts.main')

@section('container')

<h1 style="color: white" class="mb-5">Post Category : {{ $category }}</h1>

@foreach ($posts as $post)
<article class="mb-5">
<h2 style="color: white">
     <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
</h2>
<p style="color: white">{{ $post->excerpt }}</p>
</article>  
@endforeach


@endsection
    
