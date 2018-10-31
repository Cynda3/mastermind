<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;


class MastermindController extends Controller
{
    public function show(Request $request){
        // Guarda la configuracion.
        $request->session()->put('nombre', $request->input('nombre'));
        $request->session()->put('longitud', $request->input('longitud'));
        $request->session()->put('items', $request->input('items'));
        $request->session()->put('repetir', $request->input('repetir'));
        $request->session()->put('Nintentos', $request->input('Nintentos'));

        // Crea la clave teniendo en cuenta la longitud.
        
        for ($i=0; $i < session()->get('longitud'); $i++) { 
            $RandomItem = rand(1, session()->get('items'));
            $key[]=$RandomItem;
        }
        $request->session()->put('key', $key);

        return view('mastermind');
    }


    public function juego(Request $request){
        // Guarda la clave introducida por el usuario.
        $UserKey = array();
        for ($i=0; $i < session()->get('longitud'); $i++) { 
            $request->session()->push('UserKey', $request->input($i));
        }

        return view('mastermind');
    }
}