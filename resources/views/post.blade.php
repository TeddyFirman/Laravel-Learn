@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>By. Tedd404 in {{ $post->category->name }}</p>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!}
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
