<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

//    <--------------------- Program --------------------->
    public function indexProgram($circle){

        return view('program.indexprogram');
    }

    public function addProgram($circle){

        return view('program.crud.add');
    }



//    <--------------------- Kegiatan --------------------->

    public function indexKegiatan($id){

        return view('kegiatan.indexkegiatan');
    }

    public function addKegiatan($program){

        return view('kegiatan.crud.addk');
    }
}
