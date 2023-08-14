<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    <form action="{{url('postData')}}" method="post">
        @csrf
        Name: <input type="text" name="name">
        Age: <input type="text" name="age">
        <input type="submit">
    </form>
</body>
</html>
