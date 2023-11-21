@extends('layouts.app')

@section('content')
<!-- <link rel="stylesheet" href="{{ asset('css/users.css') }}">  -->
<a href="{{ route('user.create') }}">Create new user</a>
@forelse ($users as $user)
    <tr>
        <td>{{ $user->nro_doc }}</td>
        <td>{{ $user->nombre_usuario }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->roles ? $user->roles->nombre_rol : 'sin rol' }}</td>
        <td>
            <a href="{{ route('user.shows', $user->id) }}">Ver</a>
            <a href="{{ route('user.edit', $user->id) }}">Editar</a>
                  
            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                </form>
        </td>
    </tr>

    <!-- <li>
        <p>{{ $user->nro_doc }} -- {{ $user->nombre_usuario }} -- {{ $user->email }} -- {{ $user->roles ? $user->roles->nombre_rol : 'sin rol' }}</p>
    </li> -->
@empty
    <h6>No hay datos</h6>
@endforelse
@endsection

