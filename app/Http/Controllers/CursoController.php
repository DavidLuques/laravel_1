<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// aqui es  curso -> index
            //curso->create
            //curso->show

class CursoController extends Controller // no hay invoke por que son 3 , invoke es solo en 1 
{
    public function index(){
        return view('cursos/index');
    }

    public function create(){
        return view('cursos/create'
        );
    }

    public function show($curso,$pepe){
        //compact('curso')  // le paso nombre de variable y pasa esto ['curso'=>$curso]
        return view('cursos.show',['curso'=>$curso,'pepe'=>$pepe]);
    }
}
// this is a comment here 