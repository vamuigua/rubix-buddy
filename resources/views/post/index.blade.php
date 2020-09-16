<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <ul>
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <hr>
                </li>
            </ul>
        @endforeach
    @else
        <h2>No Posts Available!</h2>
    @endif
</body>
</html>