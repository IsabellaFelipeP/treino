@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Clientes
                <a class = "pull-right" href = "{{ url ('clientes/novo')}}"> Novo cliente </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class = "panel-body">
                     <table class = "table">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Ações</th>
                        <tbody>
                            
                            @foreach($clientes as $clientes)

                                <tr>
                                     <td>{{$clientes -> nome}}</td>
                                     <td>{{$clientes -> endereco}}</td>
                                     <td>{{$clientes -> numero}}</td>
                                     <td>
                                        <a href="clientes/{{$clientes->id}}/editar" class = "btn btn-default btn-sm">Editar</a>
                                        {!!Form::open(['method' => 'DELETE', 'url' => '/Clientes'.$clientes->id, 'style' => 'display: inline;'])!!}
                                        <button type = "submit" class = "btn btn-default btn-sm">Excluir</button>
                                        {!!Form::close()!!}
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection