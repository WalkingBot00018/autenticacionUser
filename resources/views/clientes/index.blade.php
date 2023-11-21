@extends('layouts.app')

@section('content')
<a href="{{ route('clientes.create') }}">Create new client</a>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Número de Documento</th>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($cliente as $clientes)
            <tr>
                <td>{{ $clientes->nombre }}</td>
                <td>{{ $clientes->apellido }}</td>
                <td>{{ $clientes->correo }}</td>
                <td>{{ $clientes->telefono }}</td>
                <td>{{ $clientes->nro_doc }}</td>
                <td>{{ $clientes->users ? $clientes->users->nombre_usuario : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('clientes.shows', $clientes->id_cliente) }}">Ver</a>
                    <a href="{{ route('clientes.edit', $clientes->id_cliente) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('clientes.destroy', $clientes->id_cliente) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                        </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No hay datos</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection


