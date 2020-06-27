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
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('usuario.cadastro')}}">Cadastro</a></li>
        </ul>
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
            <li style="font-family:Helvetica;"><strong>Cirurgias Gerais</strong></li>
        </ul>
    </div>
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('cGVsZWdvbGFzOjM1ZjdmYWM1LWM0OTAtNDZlNC04MjIxLTU5Mzg2ZDQzNmFiZQ==')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://chat.blip.ai/')
                .build();
            }
        })();
    </script>
    <footer class="rodape"> 
        <div>
            <p style="font-family:Helvetica;">Maceió - AL, todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>