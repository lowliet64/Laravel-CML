@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Exames

                <a class="pull-right" href="{{ url('/exames.create')}}"> criar  novo exame</a>
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
                               
                                <tr>
                                    <td>teste</td>
                                    <td>teste</td>
                                    <td>teste</td>

                                   
                                        <a href="" class="btn btn-sm">Editar</a>
                                        
                                    
                                        {!! Form::open() !!}

                                        <button type="submit" class="btn btn-sm">Excluir</button>
                                        {!! Form::close() !!}


                                     </td>
                                 </tr>
                               
                            </tbody>

                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
