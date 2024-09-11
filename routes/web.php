<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use Illuminate\Routing\Router;

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



Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/films',[PageController::class,'film'])->name('film');
Route::get('/scheda/{id}',[PageController::class,'scheda'])->name('scheda');