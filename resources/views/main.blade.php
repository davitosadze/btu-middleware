<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BTU</title>
</head>
<body>
    <h2>Protected endpoint : /secured</h2>
    <h3>Type correct name to check middleware!</h3>
    <form method="POST" action="{{ route('secured') }}">
        @csrf
        <input type="text" name="name" placeholder="Enter correct name" id="">
        <input type="submit" name="submit" value="Login" id="">
    </form>
</body>
</html>