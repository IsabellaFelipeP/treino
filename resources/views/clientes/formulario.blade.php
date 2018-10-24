


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> 
                Informe abaixo as informações do cliente:
                <a class = "pull-right" href = "{{ url ('clientes')}}"> Listagem Clientes </a>
                </div>

                <div class="card-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class = "alert alert-sucess" > {{Session::get('mensagem_sucesso')}} 
                    @endif    
                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/editar'))
                    {!!Form::model($cliente, ['method' => 'PATCH', 'url' => 'clientes/'.$cliente->id])!!}

                    @else
                    {!! Form::open(['url' => 'clientes/salvar'])!!}
                    @endif
                   
                      {!!Form::label('nome', 'Nome') !!}
                      {!! Form::input ('text', 'nome', null, ['class' => 'form-control', 'autofocus', 'placeholder' => 'Nome'])!!}
                      {!!Form::label('endereco', 'Endereço') !!}
                      {!! Form::input ('text', 'endereco', null, ['class' => 'form-control', '', 'placeholder' => 'Endereço'])!!}
                      {!!Form::label('numero', 'Número') !!}
                      {!! Form::input ('text', 'numero', null, ['class' => 'form-control', '', 'placeholder' => 'Número'])!!}
                        <br>
                      {!!Form::submit('Salvar', ['class' => 'btn btn-primary'])!!}
                    {!! Form::close() !!} </br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection