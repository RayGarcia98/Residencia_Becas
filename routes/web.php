<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    return view('auth.login');
});


Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('home')->middleware('isadmin');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//Usuarios
Route::get('/area1', [\App\Http\Controllers\Area1Controller::class,'index'])->name('area1');
Route::get('/area2', [\App\Http\Controllers\Area2Controller::class,'index'])->name('area2');
Route::get('/area3', [\App\Http\Controllers\Area3Controller::class,'index'])->name('area3');
Route::get('/area4', [\App\Http\Controllers\Area4Controller::class,'index'])->name('area4');

//Creacion de usuarios para administrador
Route::get('/user', [\App\Http\Controllers\UsuarioController::class,'index'])->name('usuarios');
Route::get('/usuario',[\App\Http\Controllers\UsuarioController::class,'index'])->name('lista.Usuario');
Route::post('/creacion',[\App\Http\Controllers\UsuarioController::class,'store'])->name('users.store');
Route::delete('/usuario/{user}',[\App\Http\Controllers\UsuarioController::class,'destroy'])->name('Usuario.distroy');

//Historial de seguimiento para administrador
Route::get('/seguimiento', [\App\Http\Controllers\SeguimientoController::class,'index'])->name('seguimiento');

//Solicitudes salientes y entrantes para usuarios
Route::get('/solicitudes', [\App\Http\Controllers\SolicitudesController::class,'index'])->name('solicitudes');

//Formato de Solicitudes para usuarios
Route::get('/Archivos', [\App\Http\Controllers\LinkarchivoController::class,'index'])->name('link');

Route::get('/FormatoSolicitudes', [\App\Http\Controllers\FormatosolicitudesController::class,'index'])->name('formato');

//Subir archivos para usuarios
Route::get('/SubirArchivo', [\App\Http\Controllers\SubirarchivoController::class,'index'])->name('archivo');
