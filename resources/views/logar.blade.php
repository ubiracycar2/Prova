<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <link rel="stylesheet" href="{{asset('css/indexStyle.css')}}">
</head>
<body>
    <header>
        <div class="cabeçalho">
            <h1 title="Willkommen" style="font-family:Helvetica;"><u>Bem vindo!</u></h1>
        </div>
    </header>
    <nav class="Navegar">
        <ul>
        <li><a>Seja bem vindo</a></li>
        <li><a>você logou com sucesso!</a></li>
        </ul>
        <a href="{{route('logout')}}">Logout</a>
    </nav>
    <br/>
    <div class="lista">
        <img class="img"src="imagem/Dente.jpg"/>
        <h1 style="font-family:Helvetica;">Lista de Serviços</h1>
        <ul>
            <li style="font-family:Helvetica;"><strong>Consulta</strong></li>
            <li style="font-family:Helvetica;"><strong>Consulta de Urgência</strong></li>
            <li style="font-family:Helvetica;"><strong>Perícia</strong></li>
            <li style="font-family:Helvetica;"><strong><strike>Radiologia</strike></strong>(No momento estamos sem equipamentos)</li>
            <li style="font-family:Helvetica;"><strong>Clareamento</strong></li>
            <li style="font-family:Helvetica;"><strong>Aparelho Odontológico</strong></li>
        </ul>
    </div>
    <footer class="rodape"> 
        <div>
            <p style="font-family:Helvetica;">Maceió - AL, todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>