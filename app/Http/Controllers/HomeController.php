<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
{

}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

        public function op()
    {
        return view('Interfaces.Admin');
    }

    public function Profesor()
    {
        return view('Interfaces.Profesor');
    }

    public function Alumno()
    {
        return view('Interfaces.Alumno');
    }

    public function Inicio()
    {
        return view('layouts.principal');
    }


}