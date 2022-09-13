<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./style/style.css') }}">

    <title>Um - N @yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('site.addMarcaView') }}">Add Marca</a></li>
        <li><a href="{{ route('site.addModeloView') }}">Add Modelo de Carro</a></li>
        <li><a href="{{ route('site.lista') }}">Lista de Marcas e Modelos</a></li>
    </ul>
    @yield('content')
    <footer>
        <div style="text-align: center;">
            <p>Projeto de CRUD básico para testar os relacionamentos do Eloquent ORM</p>
        </div>

    </footer>
</body>
</html>
