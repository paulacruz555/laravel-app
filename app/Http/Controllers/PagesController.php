<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
    
{ 
    public function fnindex() {
        return view ('welcome');
    }
    public function fnLista() {
        return view ('pagLista');
    }
    public function fnGaleria ($numero=0){
            $valor =  $numero;
            $otro =  25;
            
            //return view('pagGaleria',['valor=$numero,'otro'=>25]);
            return view('pagGaleria', compact('valor','otro'));
}
}