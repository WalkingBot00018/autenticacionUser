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
        // return view("user.create");
        return view("auth.register");
    }


    public function store(Request $request)
    {
        $request->validate([
            'nro_doc'=>'required|string|min:2|max:2', 'doc_num'=>'required|string|min: 5 max:15',
            'name_usuario'=>'required|string|min:3|max:50',
            'email'=>'required|email|min: 5 max: 30 unique:users',
            'password'=>'required|min:3 max:255',
            'id_rol'=>'required min:1|max: 10'
            ]);
        
        $users = User::with('roles')->get();

        return redirect()->back()->with('mensaje','usuario registrado exitosamente...');
        
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


