<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{

    public function Prueba(){
        return view('index');
    }
    public function buscarForm(){
        return view('codigoBarra');
       }


        public function buscarCodigo(Request $request){
            $codigo_barras= $request->input('codigo_barras');
            $usuario= User::where('codigo_barras', $codigo_barras)->first();
    
            if ($usuario){
                return response()->json($usuario);
            }else {
                return response()->json(['mensaje'=> 'estudiante no encontrado'],404);
            }
        }  
    
        public function listarestudiantes(){
            $usuarios= User::all();
                return view ('Listado',['estudiantes'=>$usuarios]);
        }

        public function listaAgro(){

            $usuarios= User::where('centro','Agropecuario')->get();
            $fechaHora = now();
            return view('listaAgro', ['usuarios'=> $usuarios, 'fechaHora' => $fechaHora]);
       }
    
       public function listaCtpi(){

            $usuarios = User::where('centro', 'Teleinformatico')->get();
            $fechaHora =now();
            return view ('listaCtpi', ['usuarios'=>$usuarios, 'fechaHora'=>$fechaHora]);        
       }
}

