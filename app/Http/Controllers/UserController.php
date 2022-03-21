<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Usuarios';
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
