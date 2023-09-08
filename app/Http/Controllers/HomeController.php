<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){

        return view('homepage.index');
    }

    public function getUser(Request $request){

        $tags=[];
        if($search=$request->name){
            $tags=User::where('name','LIKE',"%search%")->get();
        }
        return response()->json($tags);
    }

//    <--------------------- Program --------------------->
    public function indexProgram($kpis){

        return view('program.indexprogram');
    }

    public function addProgram($kpis){

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
