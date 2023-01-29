@extends ('layout')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>

        <p>{{ $post->excerpt }}</p>
    </article>

    <a href="/">go back</a>
@endsection