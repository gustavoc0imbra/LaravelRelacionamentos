@extends('site.layout.base')

@section('title')
    Add Marca
@endsection

@section('content')
    <center>
        <form action="{{ route('site.addMarca') }}" method="POST">
            @csrf
            <input type="text" name="nome" id="" placeholder="Insira o nome da marca">
            @error('nome')
                <p style="background-color:red;">Preencha o nome!</p>
            @enderror
            <br>
            <input type="text" name="pais" id="" placeholder="Insira o país de marca">
            @error('pais')
                <p style="background-color:red;"></p>
            @enderror
            <br>
            <input type="text" name="ano" id="" placeholder="Insira o ano de surgimento">
            @error('ano')
                <p style="background-color:red;">Preenha o ano!</p>
            @enderror
            <br>
            <input type="submit" value="Enviar">
        </form>
    </center>
@endsection