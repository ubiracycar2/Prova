<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>

    <link rel="stylesheet" href="{{asset('css/style.css')}}"

</head>
<body>
    <form class="form" action="" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="img-login" src="imagem/cadastro.png" alt="">
                <h2 style="font-family: Helvetica;"> Cadastro</h2>
                <p style="font-family: Helvetica;">Cadastre seus dados!</p>
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
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Digite seu nome!" required>
            </div>

            <div class="card-group">
                <label>Data de Nascimento</label>
                <input type="date" name="data" required>
            </div>

            <div class="card-group btn">
                <button type="submit">CADASTRAR</button>
            </div>

        </div>
    </form>
</body>
</html>