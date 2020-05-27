<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Todo o controller da parte de cadastro
 */

class CadastroController extends Controller{

//apenas a parte do view
    public function view(){
        return view('cadastro');
    }
    public function cadastrar(Request $request){
        $request->validate([
            'email' => 'required',
            'senha' => 'required',
            'nome'  => 'required',
            'data'  => 'required|date'

        ]);
        
        echo 'Cadastrado! <br/>';
        echo $request->email;
    }
}
