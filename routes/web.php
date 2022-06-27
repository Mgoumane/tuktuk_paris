<?php

use App\Http\Controllers\Accueil;
use App\Http\Controllers\adminController;
use App\Http\Controllers\detailOption;
use App\Http\Controllers\reservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/formulaireReservation/{id}',[reservationController::class,'formulaireReservation']);
Route::post('/confirmationReservation',[reservationController::class,'confirmationReservation']);
Route::get('/userReservations',[reservationController::class,'displayUserReservations']);
Route::get('/supprimerReservation/{id}',[reservationController::class,'supprimerReservation']);

// Routes vers adminControlller
Route::get('/espaceAdmin',[adminController::class,'afficherInfos']);
Route::get('/ajouterChauffeur',[adminController::class,'afficherFormAjout']);
Route::get('/modifierUtilisateur/{id}',[adminController::class,'afficherFormModif']);
Route::post('/modifierUtilisateur',[adminController::class,'modifierUtilisateur']);
Route::get('/supprimerUtilisateur/{id}',[adminController::class,'supprimerUtilisateur']);
Route::get('/supprimerChauffeur/{id}',[adminController::class,'supprimerChauffeur']);



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
