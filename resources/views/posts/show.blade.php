
@'
<!DOCTYPE html>
<html>
<head>
    <title>View Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            padding: 40px 20px;
        }
        .container {
            max-width: 750px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        h1 { color: #1e293b; }
        .content {
            color: #475569;
            line-height: 1.8;
            white-space: pre-wrap;
            margin-top: 25px;
        }
        a {
            display: inline-block;
            margin-top: 25px;
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p style="color: #94a3b8;">Blog Post</p>

    <div class="content">{{ $post->body }}</div>

    <a href="{{ route('posts.index') }}">← Back to Posts</a>
</div>
</body>
</html>
'@ | Set-Content resources\views\posts\show.blade.php
