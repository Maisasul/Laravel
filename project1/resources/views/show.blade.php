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
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Admin</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->password}}</td>
                    <td>{{$u->admin}}</td>
                    {{-- <td><a href="update/{{$u->id}}" >Update</a></td> --}}
                    <td><a href="delete/{{$u->id}}" >Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
