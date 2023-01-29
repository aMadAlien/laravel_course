@extends ('layout')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>

        <p>{!! $post->body !!}</p> 
        <!-- for html: {!! $post->body !!} -->

        <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </article>

    <a href="/">go back</a>
@endsection