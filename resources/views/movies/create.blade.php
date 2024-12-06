<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create form</title>
</head>

<body>
    <h1>Create form</h1>
    <form action={{route("movie.store")}} method="POST">
        @csrf
        <label for="name">Movie name:</label>
        <input type="text" id="name" name="name">
        <input type="text" id="year" name="year">
        <input type="submit" value="Submit">
    </form>
</body>

</html>