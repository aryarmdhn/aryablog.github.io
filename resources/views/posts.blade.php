@extends('layouts.main')

@section('container')

<main>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>{{ $title }}</h3>
                @if ($posts->count())
                <p>You can see a lot of posts here</p>
                @else
                <p>No post found</p>
                @endif
            </div>
        </div>

        @if ($posts->count())
        <div class="card-group">
            <div class="card mb-3">
                @if ($posts[0]->image)
                <div class="img-container">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
                </div>
                @else
                <div class="img-container">
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                </div>
                @endif

                <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p style="color: black" class="text-body-secondary">
                        By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
            </div>

            @foreach ($posts->skip(1) as $post)
            <div class="card mb-3">
                <div class="img-container">
                    @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                </div>

                <div class="card-body">
                    <div class="card-info">
                        <a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                    </div>
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p style="color: black" class="text-body-secondary">
                        By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                        in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <div class="pagination d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
        
    </div>
</main>

@endsection
