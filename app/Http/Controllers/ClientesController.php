<?php

namespace App\Http\Controllers;
use App\models\clientes;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        // $cliente = clientes::all();
        // return view('clientes.index', ['cliente'=>$cliente]);
        $clientes = clientes::with('users')->get();
        return view('clientes.index', ['cliente' => $clientes]);
    }

    public function create()
    {
        return view("clientes.create");
    }


    public function store(Request $request)
    {

        clientes::create($request->all());
        
        $cliente = clientes::with('users')->get();

        return redirect()->route("clientes.index")->with("success","clientes registrado exitosamente");
        
    }

    public function show($id_cliente)
{
    $clientes = clientes::find($id_cliente);

    if (!$clientes) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('clientes.index')->with('error', 'rol no encontrado');
    }

    return view('clientes.shows', ['clientes' => $clientes]);
}

    public function edit($id_cliente)
    {
        $clientes = clientes::find($id_cliente);
        return view('clientes.edit', compact('clientes'));
    }

    public function update(Request $request, $id_cliente)
    {
       

        // Actualiza el usuario
        clientes::where('id_cliente', $id_cliente)->update($request->except('_token', '_method'));

        return redirect('/cliente')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id_cliente)
    {
        
        $clientes = clientes::find($id_cliente);
        $clientes->delete(); 
        return redirect('/cliente')->with('success', 'cliente eliminado correctamente');
        
    }
    
}
