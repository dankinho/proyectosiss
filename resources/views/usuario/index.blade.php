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
        <div align="right">
            <a href="{{route('salir')}}"  class="btn btn-warning ">Cerrar Sesion</a>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Usuarios <a href="{{route('usuarios.create')}}" class="btn btn-primary btn-sm">{{__('Nuevo')}}</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre Usuario</th>
            <th scope="col">Correo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuario as  $user)
            <tr>
                <td>{{$user->nombre}}</td>
                <td>{{$user->nombre_usuario}}</td>
                <td>{{$user->correo}}</td>
                <td><a href="{{route('usuarios.edit',[$user->id_usuarios])}}"  class="btn btn-success ">Editar</a></td>
                <td>
                    <a href="" data-target="#modal-delete-{{$user->id_usuarios}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    @include('usuario.modal')
                </td>


            </tr>
        @endforeach
        </tbody>
    </table>
    {{$usuario->render()}}
</div>
@endsection