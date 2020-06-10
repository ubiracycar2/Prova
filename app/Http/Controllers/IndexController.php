<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Todo o controller da parte do index
 */

class IndexController extends Controller{
    
//apenas a parte do view
    public function view(){
        return view('index');
    }

    public function logado() {
        return view('logar');
    }

    public function informativo(){
        return view('informativo');
    }
}
