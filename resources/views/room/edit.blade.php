<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('room.update', $habitacion->id) }}">
    @csrf
    @method('PUT')
    <label for="nro_habitacion">Número de habitacion</label>
    <input type="text" name="nro_habiatcion" value="{{ $habitacion->nro_habiatcion }}">

    <label for="tipo">Tipo</label>
    <input type="text" name="tipo" value="{{ $habitacion->tipo }}">

    <label for="precio">precio</label>
    <input type="text" name="precio" value="{{ $habitacion->precio }}">

    <label for="disponibilidad">disponibilidad</label>
    <input type="text" name="disponibilidad"  value="{{ $habitacion->disponibilidad }}">


    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('reserva.shows', $reservas->id) }}">Ver Detalles</a>