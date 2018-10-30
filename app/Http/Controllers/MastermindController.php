<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;


class MastermindController extends Controller
{
    public function show(Request $request){
        return view('mastermind', [
        	'nombre'=>$request->input('nombre'),
        	'longitud'=>$request->input('longitud'),
        	'champis'=>$request->input('champis'),
        	'repetir'=>$request->input('repetir'),
        	'Nintentos'=>$request->input('Nintentos')
        ]);
    }
}


class juego extends Controller
{
    public function juego(Request $request){
        
    }
}