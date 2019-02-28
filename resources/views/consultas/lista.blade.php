@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Consultas

                <a class="pull-right" href="{{ url('/consultas.create')}}"> nova consulta</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Session::has('msg_sucesso'))
                        <div class="alert alert-success">{{  Session::get('msg_sucesso')}}</div>
                    @endif
                    
                   <table class="table">

                       <th>Nome </th>
                       <th> Data </th>
                       <th>CPF</th>
                       <th>Ações</th>

                            <tbody>
                                @foreach($consultas as $consulta)
                                <tr>
                                    <td>{{$consulta->nome}}</td>
                                    <td>{{$consulta->data}}</td>
                                    <td>{{$consulta->cpf}}</td>

                                    <td>
                                        <a href="consultas/{{$consulta->id}}/editar" class="btn btn-sm">Editar</a>
                                        
                                    
                                        {!! Form::open(['method'=>'DELETE','url' => '/consultas/'.$consulta->id]) !!}

                                        <button type="submit" class="btn btn-sm">Excluir</button>
                                        {!! Form::close() !!}


                                     </td>
                                 </tr>
                                @endforeach
                            </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
