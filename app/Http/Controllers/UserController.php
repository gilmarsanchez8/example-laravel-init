<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Gilmar', 'Juan', 'Maria', 'Natalia', '<script>alert("hola")</script>','Evelyn'];
        $title = 'Listado de Usuarios';
        // return view('users')
        //         ->with('users', $users)
        //         ->with('title', $title);
        
        //Otra forma de pasar los datos a  la vista
        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "Ver detalles del usuario: {$id}";
    }

    public function create()
    {
        return 'Crear usuario nuevo';
    }
}
