@extends ('layout')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>

        By <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>

        <p>{!! $post->body !!}</p> 
        <!-- for html: {!! $post->body !!} -->
    </article>

    <a href="/">go back</a>
@endsection