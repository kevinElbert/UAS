<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/manage">Manage</a>
    <p>Current pic</p>
    <img src="{{Storage::url($user->pic)}}" alt="">
    <form action="{{route('update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="email">Email</label>
        <input type="text" id='email' name='email' value="{{$user->email}}">
        <input type="file" name="pic" id="">
        <input type="hidden" name="id" value="{{$user->id}}">
        <button type="submit">update</button>
    </form>

    <a href="/logout">Logout</a>
    Homepage

</body>
</html>
