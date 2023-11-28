@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/role.css') }}"> 
<a href="{{ route('role.index') }}" class="btn btn-secondary">Regresar</a>
<form method="post" action="{{ route('role.store') }}" class="my-form">

    @csrf
    
    <div class="form-group">
        <label for="nombre_rol">Nombre del Rol:</label>
        <input type="text" name="nombre_rol" id="nombre_rol" class="form-control"/>
    </div>

    <input type="submit" value="Create" class="btn btn-primary"/>

</form>
@endsection
