<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservas;

class ReservasController extends Controller
{
    public function index(){
        $reservas = Reservas::all();
        return view('reserva.index', ['reservas'=>$reservas]);
    }

    public function create()
    {
        return view("reserva.create");
    }


    public function store(Request $request)
    {

        Reservas::create($request->all());
        
        $reservas = Reservas::with('reservas')->get();

        return redirect()->route("reserva.index")->with("success","reserva registrado exitosamente");
        
    }
    public function show($id)
{
    $reservas = Reservas::find($id);

    if (!$reservas) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('reserva.index')->with('error', 'reserva no encontrado');
    }

    return view('reserva.shows', ['reservas' => $reservas]);
}


public function edit($id)
    {
        $reservas = Reservas::find($id);
        return view('reserva.edit', compact('reservas'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Reservas::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/reservas')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $reservas = Reservas::find($id);
        $reservas->delete(); 
        return redirect('/reservas')->with('success', 'reserva eliminado correctamente');
        
    }
}
