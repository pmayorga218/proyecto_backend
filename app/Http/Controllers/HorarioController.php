<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
   
    public function anuncio(Request $request){
       $myHermosoHorario = $request->get('horario');
        return view('login.anuncio',compact('myHermosoHorario'));
    } 
}
