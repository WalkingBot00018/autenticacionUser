<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('role.update', $roles->id_rol) }}">
    @csrf
    @method('PUT')
    <label for="nombre_rol">Número de Documento</label>
    <input type="text" name="nombre_rol" value="{{ $roles->nombre_rol }}">

    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('role.shows', $roles->id_rol) }}">Ver Detalles</a>