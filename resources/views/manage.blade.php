<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    manage user
    @foreach ($users as $user)
        <div style="display: flex">
            <span>{{$user->email}}</span>
            <form action="{{ route('delete-user', ['id'=>$user->id]) }}" method="POST">
            @csrf
            <button type="submit">Delete user</button>
        </form>
        </div>

    @endforeach
</body>
</html>
