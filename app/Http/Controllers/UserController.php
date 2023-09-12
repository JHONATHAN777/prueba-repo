<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;





use Illuminate\Http\Request;

class UserController extends Controller
{
public function index()
{
        
        
        $users = User::all();
        return view('users.index', compact('users'));
        
}



public function show($id)
{
    // Encuentra al usuario por su ID
    $user = User::find($id);

    // Verifica si el usuario existe
    if (!$user) {
        return abort(404); // Retorna un error 404 si el usuario no existe
    }

    // Obtiene todas las publicaciones asociadas a ese usuario
    $posts = $user->posts;

    // Retorna la vista 'users.show' y pasa las variables $user y $posts a la vista
    return view('users.show', compact('user', 'posts'));
}













}
