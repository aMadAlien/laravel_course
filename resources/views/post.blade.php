<!DOCTYPE html>

<title>my blog</title>

<!-- <link rel="stylesheet" href="/app.css> -->

<body>

    <article>
        <h1><?= $post->title; ?></h1>

        <p><?= $post->excerpt; ?></p>
    </article>

    <a href="/">go back</a>
</body>