@extends('layouts.app')

@section('content')
<a href="{{ route('room.create') }}">Create new room</a>

<table>
    <thead>
        <tr>
            <th>Numero habitacion</th>
            <th>tipo</th>
            <th>precio</th>
            <th>disponibilidad</th>
            <th>fecha</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($habitaciones as $habitacionItem)
            <tr>
                <td>{{ $habitacionItem->nro_habitacion }}</td>
                <td>{{ $habitacionItem->tipo }}</td>
                <td>{{ $habitacionItem->precio }}</td>
                <td>{{ $habitacionItem->disponibilidad }}</td>
                <td>{{ $habitacionItem->reservas ? $habitacionItem->reservas->nro_reserva : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('room.shows', $habitacionItem->id) }}">Ver</a>
                    <a href="{{ route('room.edit', $habitacionItem->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('room.destroy', $habitacionItem->id) }}">
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