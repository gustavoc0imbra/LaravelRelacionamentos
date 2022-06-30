@extends('site.layout.base')

@section('title')
    Add Marca
@endsection

@section('content')
    <center>
        <form action="{{ route('site.addMarca') }}" method="POST">
            @csrf
            <input type="text" name="nome" id="" placeholder="Insira o nome da marca">
            @error('nome')@enderror
            <br>
            <input type="text" name="pais" id="" placeholder="Insira o país de marca">
            @error('pais')@enderror
            <br>
            <input type="text" name="ano" id="" placeholder="Insira o ano de surgimento">
            @error('ano')@enderror
            <br>
            <input type="submit" value="Enviar">
        </form>
    </center>
@endsection