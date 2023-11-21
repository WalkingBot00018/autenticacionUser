<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Habitaciones;

class HabitacionesController extends Controller
{
    public function index(){
        $habitaciones = Habitaciones::all();
        return view('room.index', ['habitaciones'=>$habitaciones]);
    }

    public function create()
    {
        return view("room.create");
    }


    public function store(Request $request)
    {

        Habitaciones::create($request->all());
        
        $habitaciones = Habitaciones::with('reservas')->get();

        return redirect()->route("room.index")->with("success","habitacion registrado exitosamente");
        
    }
    public function show($id)
{
    $habitaciones = Habitaciones::find($id);

    if (!$habitaciones) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('room.index')->with('error', 'reserva no encontrado');
    }

    return view('room.shows', ['habitaciones' => $habitaciones]);
}


public function edit($id)
    {
        $habitaciones = Habitaciones::find($id);
        return view('room.edit', compact('habitaciones'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Habitaciones::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/room')->with('success', 'room actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $habitaciones = Habitaciones::find($id);
        $habitaciones->delete(); 
        return redirect('/room')->with('success', 'room eliminado correctamente');
        
    }
}
