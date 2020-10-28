@extends('layouts.principal')

@section('titulo', 'Clientes - Editar')

@section('conteudo')
    
    <h3>Editar Cliente</h3>
    <br>
    <form action="{{ route('clientes.update' , $cliente['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" value="{{ $cliente['nome'] }}">
        <input type="submit" value="salvar">
    </form>

@endsection
