<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function loginIndex(){
        return view('login',[
            'title' => 'Login Page'
        ]);
    }

    public function registerIndex(){
        return view('register',[
            'title' => 'Register Page'
        ]);
    }


    public function login(Request $request){
        
    }

    public function register(Request $request){

    }
}
