@extends('layouts.plantilla')
@section('cabecera')
    <style>
        body{
            background-color: ghostwhite;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card-header"><div align="center"><h3>Registrar usuario</h3></div></div>
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['method'=>'POST','action' => 'UsuarioController@store']) !!}
                                <div class="form-group">
                                    {!! Form::label('nombre ', 'Nombre ') !!}
                                    <input type="text" class="form-control" name="nombre" required>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('nombre_user', 'Nombre Usuario') !!}
                                    <input type="text" class="form-control" name="nombre_usuario" required>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('correo', 'E-mail') !!}
                                    <input type="email" class="form-control" name="correo" required>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('pass', 'Password') !!}
                                    <input type="password" class="form-control" name="password" required >
                                </div>
                                <div class="form-group">
                                    {!! Form::label('roles', 'Roles') !!}
                                    <select class="form-control" name="id_tipo_usuario">
                                        @foreach($tipo as $t)
                                            <option value="{{$t->id_tipo_usuario}}">{{$t->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="raw text-right">
                                    <div class="form-group">
                                        <button class="btn btn-success" type="submit">Registrar</button>

                                    </div>
                                </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
