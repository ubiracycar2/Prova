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
}
