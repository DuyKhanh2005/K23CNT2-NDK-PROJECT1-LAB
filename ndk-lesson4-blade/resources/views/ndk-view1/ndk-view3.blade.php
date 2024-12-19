<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDK View 3</title>
</head>
<body>
    <h1>NDK View 3</h1>
    <hr>

    <h2>Name Array:</h2>
    @foreach ($name as $item)
        <p>{{ $item }}</p>
    @endforeach
    <hr>

    <h2>Number Array:</h2>
    <ul>
        @foreach ($arr as $value)
            <li>{{ $value }}</li>
        @endforeach
    </ul>
    <hr>

    <h2>User Array:</h2>
    @forelse ($user as $u)
        <li>{{ $u }}</li>
    @empty
        <p>No users found.</p>
    @endforelse
</body>
</html>
