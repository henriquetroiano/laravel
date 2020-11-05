@extends('layouts.principal')

@section('titlepage', 'Clientes - Novo')

@section('conteudo')

    <h3>Novo Cliente</h3>
    <br>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" name="nome">
        <input type="submit" value="salvar">
    </form>
    
@endsection