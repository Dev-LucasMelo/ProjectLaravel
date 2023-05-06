<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController
{
    public function index(){
        return View('index');
    }

    public function create(){
        return View('create');
    }

    public function store(Request $request){

        $request->validate([
            'nome' => 'required', 
            'idade' => 'required',
            'profissao' => 'required',
        ]);
        Usuario::create($request->post());
        return redirect()->route('index');
    }

}
