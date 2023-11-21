@extends('layouts.app')

@section('content')
<a href="{{ route('reserva.create') }}">Create new reservation</a>

<table>
    <thead>
        <tr>
            <th>Numero reserva</th>
            <th>Numero habitacion</th>
            <th>Id cliente</th>
            <th>Fecha Entrada</th>
            <th>Fecha Salida</th>
            <th>Estado</th>
            <th>tipo</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($reservas as $reservas)
            <tr>
                <td>{{ $reservas->nro_reserva }}</td>
                <td>{{ $reservas->nro_habitacion }}</td>
                <td>{{ $reservas->id_cliente }}</td>
                <td>{{ $reservas->fecha_entrada }}</td>
                <td>{{ $reservas->fecha_salida }}</td>
                <td>{{ $reservas->estado }}</td>
                <td>{{ $reservas->habitaciones ? $reservas->habitaciones->tipo : 'sin nada' }}</td>
                <td>
                    <a href="{{ route('reserva.shows', $reservas->id) }}">Ver</a>
                    <a href="{{ route('reserva.edit', $reservas->id) }}">Editar</a>
                  
                    <form method="POST" action="{{ route('reserva.destroy', $reservas->id) }}">
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


