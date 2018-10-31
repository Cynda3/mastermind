<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;


class MastermindController extends Controller
{
    public function show(Request $request){
        $request->session()->put('nombre', $request->input('nombre'));
        $request->session()->put('longitud', $request->input('longitud'));
        $request->session()->put('items', $request->input('items'));
        $request->session()->put('repetir', $request->input('repetir'));
        $request->session()->put('Nintentos', $request->input('Nintentos'));
        
        return view('mastermind');
    }
}


class juego extends Controller
{
    public function juego(Request $request){
        
    }
}