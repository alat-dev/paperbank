<?php

namespace App\Http\Controllers;

use App\Models\FoS;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    //

    public function loginIndex(){
        return view('login',[
            'page_title' => 'Login Page'
        ]);
    }

    public function registerIndex(){
        return view('register',[
            'page_title' => 'Register Page',
            'universities' => University::orderBy('name')->get(),
            'fo_s' => FoS::orderBy('name')->get(),

        ]);
    }


    public function login(Request $request){
        $validate = $request->validate([
            'email' => ['required'],
            'password' => ['required']        
        ]);

        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return redirect()->intended('/login')->with('login_failed', 'Email and password does not match');

        

    }

    public function register(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255|string',
            'university_id' => 'required|int',
            'fos_id' => 'required|int',
            'username' => 'required|unique:users|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => ['required',Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised(),'confirmed'],
        ]);

        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);

        return redirect()->intended('/login')->with('register_success', 'You successfully registered your account!');
    }


    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
