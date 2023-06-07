<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function store(Request $request){

        $Alumno = new Alumno();
        $Alumno->rut = $request->rut;
        $Alumno->nombre = $request->entrenador;
        $Alumno->apellido = $request->apellido;
        $Alumno->email = $request->email;
    
        $Alumno-> save();
        return redirect()->route('Interfaces.Alumno');

       
    }


}