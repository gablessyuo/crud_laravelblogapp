

<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 40px 20px;
        }
        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        h1 { color: #1e293b; }
        label { display: block; margin-top: 18px; color: #475569; }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            box-sizing: border-box;
            font-family: Arial;
        }
        textarea { min-height: 150px; }
        button {
            margin-top: 20px;
            background: #2563eb;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
        }
        a { color: #2563eb; text-decoration: none; }
    </style>
</head>
<body>
<div class="container">
    <h1>Edit Post</h1>
    <p>Update the details of your blog post.</p>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" value="{{ $post->title }}" required>

        <label>Body</label>
        <textarea name="body" required>{{ $post->body }}</textarea>

        <button type="submit">Update Post</button>
    </form>

    <p><a href="{{ route('posts.index') }}">← Back to Posts</a></p>
</div>
</body>
</html>

