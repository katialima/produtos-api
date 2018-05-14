<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $users = User::get();
        return response()->json($users);
    }
}
