<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController
{
    public function index(){
        
        $usuarios = Usuario::orderBy('id')->paginate();  
        //traduzindo para query  = select * from usuarios order by id 
        //(paginate passa tudo para coleção de dados)

        return View('index',compact('usuarios'));
        //passando colecao de usuarios como parametro
    }

    public function create(){
        return View('create');
        //aqui é apenas uma rota para a view que contem o form
    }

    public function store(Request $request){

        $request->validate([
            'nome' => 'required', 
            'idade' => 'required',
            'profissao' => 'required',
        ]);
        //request sao os dados que vem do form 

        Usuario::create($request->post());
        return redirect()->route('index');
    }

}
