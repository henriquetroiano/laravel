@extends('layouts.principal')


@section('titlepage', 'Opções')


@section('conteudo')
<div class="options">
    <ul>
        <li><a href="{{ route('opcoes', 1) }}" class="warning {{ Request::path() == 'opcoes/1' ? 'selected' : '' }}">warning</a></li>
        <li><a href="{{ route('opcoes', 2) }}" class="info {{ Request::path() == 'opcoes/2' ? 'selected' : ' ' }}">info</a></li>
        <li><a href="{{ route('opcoes', 3) }}" class="success {{ Request::path() == 'opcoes/3' ? 'selected' : ' ' }}">success</a></li>
        <li><a href="{{ route('opcoes', 4) }}" class="error {{ Request::path() == 'opcoes/4' ? 'selected' : ' ' }}">error</a></li>
    </ul>
</div>


@if(isset($opcao))
    @switch($opcao)
        @case(1)
            @alerta(['titulo' => 'Success', 'tipo'=>'warning'])
                <p><strong>Warning</strong></p>
                <p>Ocorreu um erro Inesperado</p>
            @endalerta
            @break
        @case(2)
        @alerta(['titulo'=>'Erro Fatal', 'tipo' => 'info'])
        <p><strong>Info</strong></p>
        <p>Ocorreu um erro Inesperado</p>
        @endalerta
            @break
        @case(3)
            @alerta(['titulo' => 'Success', 'tipo'=>'success'])
                <p><strong>Success</strong></p>
                <p>Ocorreu um erro Inesperado</p>
            @endalerta
            @break
        @case(4)
            @alerta(['titulo' => 'Success', 'tipo'=>'error'])
                <p><strong>Error</strong></p>
                <p>Ocorreu um erro Inesperado</p>
            @endalerta
            @break
    @endswitch
@endif
@endsection









