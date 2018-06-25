<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    <h1>Hello, Contact!</h1>

    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <p>Name : <input type="text" name="name" value=""></p>
        <p>Description : <textarea name="description"></textarea></p>
        <p><input type="submit" value="Submit"></p>
    </form>

</body>
</html>