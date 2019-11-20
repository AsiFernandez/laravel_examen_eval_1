<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    function mostrarFormulario(){
        return view('nuevaTienda');
    }

    public function mostrarDatosFormulario(Request $request){
        
        DB::insert('insert into shops (name, description, password, email, likes) values (?, ?, ?, ?, ? )', [$request->input('nombre'), $request->input('description'),$request->input('password'),  $request->input('email'), $request->input('likes'),]);
        
        return view('mostrarDatosForm')->with('nombre',$request->input('nombre'))
        ->with('description', $request->input('description'))
        ->with('password', $request->input('password'))
        ->with('email',$request->input('email'))
        ->with('likes',$request->input('likes'));
    }

}
