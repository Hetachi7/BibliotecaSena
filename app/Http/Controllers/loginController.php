<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function Inicio(){
        return view('inicio_Sesion');
    }

    public function login( Request $request){

        
      $request->validate([
        'numeroId'=>'required|string',
        'password'=>'required|string',
      ]); 
      $credentials =[
        "numeroId"=>$request->numeroId,
        "password"=>$request->password,

      ];
        $remember = ($request->has('remember')? true:false);

        
        if (Auth::attempt ($credentials, $remember)){
                $request->session()->regenerate();
                return redirect()->intended(route('Inic'));
        }else{
            return redirect('login')->withErrors([
                'error'=>'numero de identificacion no encontrado',                
            ]);
        }
          
       
    }
}
