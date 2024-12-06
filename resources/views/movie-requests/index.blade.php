<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Requests</title>
</head>

<body>
    <h1>List of movie requests</h1>
    <ul>
        @foreach ($request as $requesting)
        <li>{{ $requesting->name }}</li>
        <li>{{ $requesting->email }}</li>
        @endforeach
    </ul>
</body>

</html>