@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('room.index') }}">REGRESAR</a>
<form method="post" action="{{ route('room.store') }}" class="my-form">

    @csrf
    
    <label for="nro_habitacion">Número de habitacion</label>
    <input type="text" name="nro_habitacion" id="nro_habitacion" >

    <label for="tipo">Tipo</label>
    <input type="text" name="tipo" id="tipo" >

    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">

    <label for="disponibilidad">Disponibilidad</label>
    <input type="text" name="disponibilidad" id="disponibilidad" >


    <input type="submit" value="Create" class="btn btn-primary"/>

</form>

@endsection