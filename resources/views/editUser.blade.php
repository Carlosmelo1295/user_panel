<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Editar usuário</title>
</head>

<body>
<div class="insert-user">

    <div class="users">
        <form action="{{ route('update', ['user' => $user->id]) }}" method="post">
            @csrf
            @method('PUT')

            <input placeholder="username" type="text" name="username" value="{{$user->username}}">
            <br>
            <input placeholder="email" type="email" name="email" value="{{$user->email}}">
            <br>

            <input type="submit" value="editar usuário" class="btn btn-danger btn-xs">

        </form>

    </div>
</div>


</body>

</html>
