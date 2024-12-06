<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit form</title>
</head>

<body>
    <h1>Edit form</h1>
    <form action={{route("movie.update")}} method="POST">
        @csrf
        <label for="name">Movie name:</label>
        <input type="text" id="name" name="name" value=" {{$movie->name}}">
        <input type="text" id="year" name="year" value=" {{$movie->year}}">
        <input type="submit" value="Submit">
    </form>
</body>

</html>