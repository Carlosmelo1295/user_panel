<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Painel</title>
</head>

<body>
<header><h1>PAINEL DE USUÁRIOS</h1></header>
<div class="insert-user">
    <form action="{{ route('insert') }}" method="post">
        @method('POST')
        @csrf

        <input placeholder="username" type="text" name="username" alt="username">
        <br>
        <input placeholder="email" type="email" name="email" alt="email">
        <br>
        <input placeholder="Password" type="password" name="password" alt="password">

        <br>
        <button type="submit" value="inserir" class="btn btn-outline-dark">INSERIR USUÁRIO</button>

    </form>
</div>

<div class="box-users">
    @if (count($users) > 0)
        @foreach ($users as $key => $value)
            <div>
                <h2>{{$key+1 .': '.  $value->username }}</h2>
                <form action="{{ route('delete-user', $value->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input onclick="return confirm('Quer mesmo remover {{ $value->username }}?');" type="submit"
                           value="DELETAR" class="deletar">
                </form>

                <form action="{{ route('getuser', $value->id) }}" method="get">
                    @method('GET')
                    @csrf
                    <input type="submit" value="EDITAR" class="editar">
                </form>
            </div>

        @endforeach
    @else
        <p>No users found.</p>
    @endif
</div>


</body>

</html>
