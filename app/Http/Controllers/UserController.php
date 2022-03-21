<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['Gilmar', 'Juan', 'Maria', 'Natalia', '<script>alert("hola")</script>'];
        return view('users', ['users' => $users, 'title' => 'Listado de Usuarios']);
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
