<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function indexCapaian($circle){


        return view('kpis.kpiCapaian', compact('circle'));
    }

    public function indexTarget($circle){

        $month = [1,2,3,4,5,6,7,8,9,10,11,12];

        return view('kpis.kpiTarget', compact('month'));
    }
}
