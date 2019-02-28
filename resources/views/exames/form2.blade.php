@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Novo Exame

                <a class="pull-right" href="{{ url('/Exames')}}">  Exames</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('msg_sucesso'))
                        <div class="alert alert-success">{{  Session::get('msg_sucesso')}}</div>
                    @endif








                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                      @if(Request::is("*/editar"))
                        {!! Form::model($consulta,['method'=>'PATCH','url' => '/consultas/'.$consulta->id]) !!}
                    @else
                         {!! Form::open(['url' => '/consultas.salvar']) !!}
                    @endif

                  
                         {!!Form::label('nome','Nome')!!}
                         {!!Form::input('text','nome',null,['class'=>'form-control','autofocus','placeholder'=>'Nome'])!!}

                         {!!Form::label('data','Data')!!}
                         {!!Form::input('text','data',null,['class'=>'form-control','autofocus','placeholder'=>'Data'])!!}

                         {!!Form::label('cpf','CPF')!!}
                         {!!Form::input('text','cpf',null,['class'=>'form-control','autofocus','placeholder'=>'CPF'])!!}

                         {!!Form::submit('Agendar',['class'=>'btn btn-primary form-group'])!!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
