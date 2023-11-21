@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('user.index') }}">REGRESAR</a>
<form method="post" action="{{ route('user.store') }}" class="my-form">

    @csrf
    
    <div class="form-group">
        <label for="nro_doc">Numero Documento:</label>
        <input type="text" name="nro_doc" id="nro_doc" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="nombre_usuario">Nombre Usuario:</label>
        <input type="text" name="nombre_usuario" id="nombre_usuario" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="id_rol">Id del Rol:</label>
        <input type="text" name="id_rol" id="id_rol" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection