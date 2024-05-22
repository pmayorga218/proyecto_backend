<?php

use App\Http\Controllers\HorarioController;
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
    return view('login.login');
});
Route::get('/placa', function () {
    return view('login.placa');
})->middleware('auth');
Route::get('/eleccion', function () {
    return view('login.eleccion');
})->middleware('auth');
Route::get('/parqueaderoc', function () {
    return view('login.parqueaderoc');
})->middleware('auth');
Route::get('/parqueaderom', function () {
    return view('login.parqueaderom');
})->middleware('auth');
Route::get('/horario', function () {
    return view('login.horario');
})->middleware('auth');
Route::get('/anuncio', [HorarioController::class,'anuncio'])->name('anuncio');
Route::get('/back', function () {
    return view('login.back');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
