@extends('site.layout.base')

@section('title')
    Listas Marcas
@endsection

@section('content')
    <center>
        <table class="tMarcas">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>País</th>
                <th>Ano</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
        @foreach ($marcas as $marcas)
            <tr>
                <td>{{ $marcas->id }}</td>
                <td>{{ $marcas->nome }}</td>
                <td>{{ $marcas->pais }}</td>
                <td>{{ $marcas->ano }}</td>
                <td><a href="{{ route('site.editar', $marcas->id) }}">Editar</a></td>
                <td><a href="{{ route('site.remover', $marcas->id) }}">Remover</a></td>
            </tr>
        @endforeach 
        </table>
        <br>
        <table class="tMarcas">
            <tr>
                <th>Id Marca</th>
                <th>Nome Modelo</th>
                <th>Ano Modelo</th>
                <th>Combustível</th>
            </tr>
            @foreach ($marcas->modelos as $modelo)
            <tr>
                <td>{{ $modelo->marca_id }}</td>
                <td>{{ $modelo->nome }}</td>
                <td>{{ $modelo->ano }}</td>
                <td>{{ $modelo->combustivel }}</td>
            </tr>
            @endforeach
        </table>
    </center>
@endsection