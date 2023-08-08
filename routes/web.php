<?php

use App\Http\Controllers\TipoController;
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
    return view('index');
})->name('home');

//Get
Route::get('/tipos', [TipoController::class, 'index'])  ->name('tipos.index');

Route::get('/tipos/create', [TipoController::class, 'create']) ->name('tipos.create');
//Post
//Put
//Delete