@extends('site.layout.base')

@section('title')
    Editar
@endsection

@section('content')
    <center>
        <form action="{{ route('site.update', $marca->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="nome" placeholder="{{ $marca->nome }}">
            <br>
            <input type="text" name="pais" placeholder="{{ $marca->pais }}">
            <br>
            <input type="text" name="ano" placeholder="{{ $marca->ano }}">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </center>
@endsection