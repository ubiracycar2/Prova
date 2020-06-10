<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Todo o controller da parte de login
 */

class LoginController extends Controller{

//apenas a parte do view
    public function view(){
        return view('login');
    }
//Logar no site e recuperar os dados
    public function logar(Request $request){
        if($request->email == 'teste@teste.com' && $request->senha == '12345'){
            session(['nome' => 'Teste']);
            return redirect()->route('index.logado');
        } else {
            return redirect()->back();
        }
    }

    public function logout(Request $request){

        $request->session()->flush();
        return redirect('/');
    }
}
