<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f1e9;
            color: #243247;
        }
        .navbar {
            background: #172b4d;
            color: white;
            padding: 22px 8%;
            font-size: 22px;
            font-weight: bold;
        }
        .container {
            max-width: 850px;
            margin: 50px auto;
            padding: 0 20px;
        }
        .create-btn {
            display: inline-block;
            background: #315caa;
            color: white;
            padding: 13px 20px;
            border-radius: 7px;
            text-decoration: none;
        }
        .post, .empty {
            background: white;
            padding: 25px;
            margin-bottom: 18px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }
        .actions a {
            color: #315caa;
            margin-right: 18px;
            text-decoration: none;
        }
        button {
            background: #c74747;
            color: white;
            border: none;
            padding: 8px 13px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="navbar">MY BLOG</div>

<div class="container">
    <h1>My Blog Posts</h1>
    <p>Welcome to my personal blog. Share your thoughts and stories.</p>

    <a class="create-btn" href="{{ route('posts.create') }}">+ Create New Post</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @forelse($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>

            <div class="actions">
                <a href="{{ route('posts.show', $post->id) }}">View</a>
                <a href="{{ route('posts.edit', $post->id) }}">Edit</a>

                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this post?')">Delete</button>
                </form>
            </div>
        </div>
    @empty
        <div class="empty">
            <h3>No posts yet</h3>
            <p>Start sharing your stories by creating your first post.</p>
        </div>
    @endforelse
</div>

</body>
</html>