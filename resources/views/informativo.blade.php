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
        <a href="{{route('index.logado')}}">Voltar</a>
        <br>
        <br>
        <a href="{{route('logout')}}">Logout</a>
    </nav>
    <br/>
    <div class="lista">
        <h1 style="font-family:Helvetica;">Informativo</h1>
        <p>
            Lorem ipsum vulputate facilisis ad viverra taciti vulputate eget augue ipsum, metus scelerisque quam varius hendrerit praesent neque litora primis mauris fames, ornare ante nibh elit sociosqu class lacinia tristique pulvinar. 
            magna fames lacus nulla torquent venenatis massa quisque nunc, facilisis dictumst congue et ultrices convallis odio, eleifend leo aenean scelerisque quisque sociosqu amet. 
            massa quam rhoncus sit dictumst enim aenean aptent habitasse placerat curae euismod neque, ut erat id orci donec lacus commodo libero ultrices mi. 
            placerat cursus litora nec commodo donec habitant quisque egestas dictumst fusce velit placerat malesuada habitant, leo aenean faucibus aenean leo curae curabitur proin placerat suscipit tellus turpis himenaeos. 
            </p>
            <p>
            Taciti sociosqu risus integer a commodo conubia hac nullam lacinia, quisque commodo ipsum vulputate mauris vel fusce. 
            fames ipsum vel proin posuere laoreet tristique praesent, etiam pellentesque mattis neque vel suspendisse, id dapibus fusce enim conubia fermentum. 
            quis curae vitae netus pellentesque donec feugiat faucibus id, sed suscipit magna feugiat neque senectus ultrices molestie augue, sem luctus litora sollicitudin volutpat aenean interdum. 
            posuere curabitur sagittis dapibus suscipit cubilia laoreet egestas aliquam tempus vulputate semper, posuere sollicitudin hac nulla etiam massa sodales feugiat nullam malesuada tempus, sagittis sollicitudin netus gravida neque scelerisque placerat suscipit mollis torquent. 
            </p>
    </div>
    <footer class="rodape"> 
        <div>
            <p style="font-family:Helvetica;">Maceió - AL, todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>