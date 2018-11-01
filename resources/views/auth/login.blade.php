@extends('layouts.plantilla')
@section('cabecera')
    <style>
        body{
            background-color: #6c757d;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header"><div align="center"><h3>{{ __('Login') }}</h3></div></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('inicio') }}" aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('Usuario') }}</label>

                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control" name="nombre_usuario" value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>



                            <div class="form-group ">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">
                                        {{ __('Ingresar') }}
                                    </button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
