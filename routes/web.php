<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('homepage.index');
//});

Route::controller(\App\Http\Controllers\HomeController::class)->group(function (){
    Route::get('/', 'home');
    Route::post("users", "getUser")->name('getUser');
});

Route::controller(\App\Http\Controllers\ProgramController::class)->group(function () {
    Route::get('/{kpis}/program/addprogram', 'create')->name('addprogram');
    Route::post("programs", "store");

});

Route::get('/kpiscapaian/{circle}', [\App\Http\Controllers\NavbarController::class, 'indexCapaian'])->name('capaian');
Route::get('/kpistarget/{circle}', [\App\Http\Controllers\NavbarController::class, 'indexTarget'])->name('target');

Route::get('/{kpis}/program', [\App\Http\Controllers\HomeController::class, 'indexProgram'])->name('program');
//Route::get('/{kpis}/program/addprogram', [\App\Http\Controllers\HomeController::class, 'addProgram'])->name('addprogram');


Route::get('/{program}/kegiatan', [\App\Http\Controllers\HomeController::class, 'indexKegiatan'])->name('kegiatan');
Route::get('/{program}/kegiatan/addkegiatan', [\App\Http\Controllers\HomeController::class, 'addKegiatan'])->name('addkegiatan');

