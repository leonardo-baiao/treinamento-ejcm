<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FormController extends Controller
{
    public function index(){
        return view('formulario');
    }

    public function send(Request $request){
       $nome = $request->nome;
        return response()->json(['usuario'=> $nome]);
    }
}
