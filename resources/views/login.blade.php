<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Loguin</title>

    <link rel="stylesheet" href={{asset('css/style.css')}}>

</head>
<body>
<form class="form" action="{{url('logar')}}" method="POST">
    @csrf
        <div class="card">
            <div class="card-top">
                <img class="img-login" src="imagem/login.svg" alt="">
                <h2 style="font-family: Helvetica;"> Login</h2>
                <p style="font-family: Helvetica;">Entre com seus dados!</p>
            </div>

            <div class="card-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email!" required>
            </div>

            <div class="card-group">
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha!" required>
            </div>

            <div class="card-group">
                <label><input type="checkbox"> Lembre-me</label>
            </div>

            <div class="card-group btn">
                <button type="submit">ENTRAR</button>
            </div>

        </div>
    </form>
</body>
</html>