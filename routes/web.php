<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserGym;

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
    return view('welcome');
});


Route::view('usergym', 'usergym');

Route::post('usergym', [UserGym::class, 'add']);
Route::get('usergym',[UserGym::class,'show']);
Route::get('delete/{id}',[UserGym::class,'delete']);
Route::get('edit/{id}',[UserGym::class,'edit']);
Route::post('edit',[UserGym::class,'update']);

