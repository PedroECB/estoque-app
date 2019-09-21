<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listando clientes</title>
</head>
<body>
        <h1>Listando clientes</h1>

            @if (count($clientes)>0)
                <ul>
                    @foreach ($clientes as $cliente)
                        <li>{{$cliente['nome']}}</li>
                    @endforeach 
                </ul>

            @else
                <h3>Não há clientes cadastrados</h3>
            @endif

        
    
    
</body>
</html>