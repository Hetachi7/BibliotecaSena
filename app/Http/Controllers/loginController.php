<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function Inicio(){
        return view('inicio_Sesion');
    }

    public function login( Request $request){
        $request-> validate([
            'numeroId'=>'required|string',
            'password'=>'required|string',
        ]);

        $credentials = $request->only ('numeroId', 'password');

        $user = User ::where ('numeroId',$credentials['numeroId'])->first();
        
        if ($user && $credentials['password'] === $user->numeroId){
            
            Auth::login($user);
            dd('usuario autenticado y redirigiendo');
            return redirect()->route('prueba1');
        } else{
            return redirect('login')->withErrors([
                'error'=>' El numero no esta en el sena',
            ]);
        }
       
    }
}
