<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>All Posts</h1>
    </header>

    <main>
        <div class="posts">
            @foreach($posts as $post)
                <div class="post">
                    <div class="post-image">
                        <img src="{{ $post->image }}" alt="Post Image">
                    </div>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->excerpt }}</p>
                    <a href="{{ route('post', $post->id) }}">Read More</a>
                </div>
            @endforeach
        </div>

        <div class="pagination">
            <a href="#">&laquo; Prev</a>
            <a href="#">Next &raquo;</a>
        </div>
    </main>

    <footer>
        <h3>Join our team to be a part of our story</h3>
        <p>Subscribe to our newsletter to get latest updates and news.</p>
        <button>Subscribe</button>
    </footer>
</body>
</html>