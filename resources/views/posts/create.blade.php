<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
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
            max-width: 650px;
            margin: 50px auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.07);
        }
        h1 { color: #172b4d; }
        p { color: #718096; }
        label {
            display: block;
            margin-top: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            box-sizing: border-box;
            font-family: Arial;
        }
        textarea { min-height: 160px; }
        button {
            margin-top: 20px;
            background: #315caa;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 7px;
            cursor: pointer;
        }
        a {
            color: #315caa;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="navbar">MY BLOG</div>

<div class="container">
    <h1>Create New Post</h1>
    <p>Share something with your readers.</p>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <label>Title</label>
        <input type="text" name="title" placeholder="Enter your title" required>

        <label>Body</label>
        <textarea name="body" placeholder="Write your story..." required></textarea>

        <button type="submit">Publish Post</button>
    </form>

    <p><a href="{{ route('posts.index') }}">← Back to Posts</a></p>
</div>

</body>
</html>