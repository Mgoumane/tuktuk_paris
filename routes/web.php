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



// Routes vers AcceuilController
Route::get('/',[Accueil::class,'accueil']);
Route::get('/about',[Accueil::class,'about']);

// Routes vers detailOptionController
Route::get('/detailOption/{id}',[detailOption::class,'afficherOption']);

// Routes vers reservationController
Route::get('/formulaireReservation/{id}',[reservationController::class,'formulaireReservation']);
Route::post('/confirmationReservation',[reservationController::class,'confirmationReservation']);
Route::get('/userReservations',[reservationController::class,'displayUserReservations']);
Route::get('/supprimerReservation/{id}',[reservationController::class,'supprimerReservation']);
Route::get('/userModif/{id}',[reservationController::class,'formulaireModif']);
Route::post('/userModif',[reservationController::class,'userModif']);

// Routes vers adminControlller
Route::get('/espaceAdmin',[adminController::class,'afficherInfos']);
Route::get('/ajouterChauffeur',[adminController::class,'afficherFormAjout']);
Route::post('/ajouterChauffeur',[adminController::class,'ajouterChauffeur']);
Route::get('/ajouterOption',[adminController::class,'formAjoutOption']);
Route::post('/ajouterOption',[adminController::class,'ajouterOption']);
Route::get('/modifierUtilisateur/{id}',[adminController::class,'formModifUser']);
Route::post('/modifierUtilisateur',[adminController::class,'modifierUtilisateur']);
Route::get('/modifierChauffeur/{id}',[adminController::class,'formModifChauffeur']);
Route::post('/modifierChauffeur',[adminController::class,'modifierChauffeur']);
Route::get('/modifierOption/{id}',[adminController::class,'formModifOption']);
Route::post('/modifierOption',[adminController::class,'modifierOption']);
Route::get('/supprimerUtilisateur/{id}',[adminController::class,'supprimerUtilisateur']);
Route::get('/supprimerChauffeur/{id}',[adminController::class,'supprimerChauffeur']);
Route::get('/supprimerOption/{id}',[adminController::class,'supprimerOption']);


// Autres routes

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
