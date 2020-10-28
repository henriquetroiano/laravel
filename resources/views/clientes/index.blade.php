@extends('layouts.principal')

@section('titulo', 'Clientes')

@section('conteudo')
    <h3>Clientes:</h3>
    <h4>{{$titulo}}</h4>
    <a href="{{route('clientes.create')}}">Novo cliente</a>
    <br>

    @if(count ($clientes) > 0)
        <ul>
            @foreach ($clientes as $c)
                <li>
                    {{ $c['nome'] }} ||| ID: {{$c['id']}} ||| 
                    <a href="{{route('clientes.edit', $c['id'])}}">Editar</a> ||| 
                    <a href="{{ route('clientes.show', $c['id']) }}">Info</a> |||
                    <form action="{{ route('clientes.destroy' , $c['id']) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
                </li>
            @endforeach

            <hr>

            @foreach ($clientes as $c)
                <p>{{ $c['nome'] }} | 
                        @if($loop->first)
                            (primeiro)
                        @endif
                        @if($loop->last)
                            (último)
                        @endif
                        ( index {{$loop->index}} ) , interação {{ $loop->iteration }} de {{ $loop->count }}
                </p> <br>

            @endforeach
            
        </ul>
    @else
    <h4>Não existem clientes Cadastrados</h4>
    @endif

    @empty($clientes)
    <h4>Não existem clientes Cadastrados</h4>
        
    @endempty
@endsection