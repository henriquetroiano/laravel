@extends('layouts.principal')

@section('titulo', 'Departamentos')


@section('conteudo')

    <h3>Departamentos</h3>
    <br>
    <ul>
        <li>Computadores</li>
        <li>Eletrônicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>
    <br>
    {{--  <a href="{{ route('clientes.index') }}">Voltar</a>  --}}
    
    @component('components.alerta', ['titulo'=>'Erro Fatal'])
        <p><strong>Erro inesperado</strong></p>
        <p>Ocorreu um erro Inesperado</p>
    @endcomponent
    @component('components.alerta')
    @endcomponent
    @component('components.alerta')
    @endcomponent
    @component('components.alerta')
    @endcomponent
@endsection

