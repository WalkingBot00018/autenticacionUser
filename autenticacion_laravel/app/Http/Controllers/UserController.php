<?php

namespace App\Http\Controllers;
use App\models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
    }

    public function create()
    {
        return view("user.create");
    }


    public function store(Request $request)
    {

        User::create($request->all());
        
        $users = User::with('roles')->get();

        return redirect()->route("user.index")->with("success","usuario registrado exitosamente");
        
    }
    public function show($id)
{
    $user = User::find($id);

    if (!$user) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
    }

    return view('user.shows', ['user' => $user]);
}


public function edit($id)
    {
        $users = User::find($id);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        User::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $users = User::find($id);
        $users->delete(); 
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');
        
    }

}


