@extends('layouts.principal')

@section('titlepage', 'Clientes - Info')

@section('conteudo')

    <h3>Informações do Cliente</h3>
    <br>
    <p>ID: {{ $cliente['id'] }}</p>
    <p>Nome: {{ $cliente['nome'] }}</p>
    <br>
    <a href="{{ route('clientes.index') }}">Voltar</a>
    
@endsection

