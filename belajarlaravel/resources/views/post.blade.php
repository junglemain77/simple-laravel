@extends('layouts.main')

@section('container')
<article>
    <h1 class="mb-5">{{ $post->title }}</h1>
    <h5>By: Vale in <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }}</h5>
    {!! $post->body !!}
</article>

    <a href = "/posts">Back to Posts</a>
@endsection