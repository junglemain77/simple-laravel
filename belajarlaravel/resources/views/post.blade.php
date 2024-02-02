@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    <h5>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug}}" class="text-decoration-none">{{ $post->category->name }}</h5>
    {!! $post->body !!}
</article>

    <a href = "/posts">Back to Posts</a>
@endsection