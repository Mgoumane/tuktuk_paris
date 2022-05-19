<?php

use App\Http\Controllers\Accueil;
use App\Http\Controllers\detailOption;
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


Route::get('/',[Accueil::class,'accueil']);
Route::get('/about',[Accueil::class,'about']);
Route::get('/detailOption/{id}',[detailOption::class,'afficherOption']);

