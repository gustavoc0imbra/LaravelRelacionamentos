@extends('site.layout.base')

@section('title')
    Add Modelo
@endsection

@section('content')
    <center>
        <form action="{{ route('site.addModelo') }}" method="POST">
            @csrf
            <input type="text" name="nome" placeholder="Insira o nome do carro">
            @error('nome')
                <p style="background-color:red;">Preencha o nome!</p>
            @enderror
            <br><br>
            <input type="text" name="marca_id" placeholder="Insira o número da marca desejada">
            @error('marca_id')
                <p style="background-color:red;">Insira uma marca!</p>
            @enderror
            <br><br>
            <input type="text" name="ano" placeholder="Insira o ano de modelo do carro">
            @error('ano')
                <p style="background-color:red;">Preencha com o ano do modelo de carro!</p>
            @enderror
            <br><br>
            <input type="text" name="combustivel" placeholder="Insira o tipo de combústivel do carro">
            @error('combustivel')
                <p style="background-color:red;">Preencha com o combustivel!</p>
            @enderror
            <br><br><br>
            <input type="submit" value="Enviar">
        </form>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
            </tr>
            @foreach ($marcas as $marcas)
                <tr>
                    <td>{{ $marcas->id }}</td>
                    <td>{{ $marcas->nome }}</td>
                </tr>
            @endforeach
        </table>
    </center>
@endsection
