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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/infermiere/AjouterEmploye', [App\Http\Controllers\InfermiereController::class, 'Ajouter']);
Route::post('/infermiere/AjouterEmploye', [App\Http\Controllers\InfermiereController::class, 'store']);
Route::get('/infermiere/login', [App\Http\Controllers\InfermiereController::class, 'login']);
Route::get('/infermiere/gestionVisite', [App\Http\Controllers\InfermiereController::class, 'gestion']);
Route::get('/infermiere/VisiteAmbauche', [App\Http\Controllers\VisiteAmbaucheController::class, 'Ambauche']);
Route::post('/infermiere/VisiteAmbauche', [App\Http\Controllers\VisiteAmbaucheController::class, 'store']);
Route::get('/infermiere/VisiteReprise', [App\Http\Controllers\VisiteRepriseController ::class, 'Reprise']);
Route::post('/infermiere/VisiteReprise', [App\Http\Controllers\VisiteRepriseController ::class, 'store']);
Route::get('/infermiere/VisitePeriodique', [App\Http\Controllers\VisitePeriodiqueController::class, 'Periodique']);
Route::post('/infermiere/VisitePeriodique', [App\Http\Controllers\VisitePeriodiqueController::class, 'store']);
Route::get('/infermiere/VisiteSpantane', [App\Http\Controllers\VisiteSpantaneController::class, 'Spantane']);
Route::post('/infermiere/VisiteSpantane', [App\Http\Controllers\VisiteSpantaneController::class, 'store']);
Route::get('/infermiere/VisiteHandiquape', [App\Http\Controllers\VisiteHandiquapeController::class, 'Handiquape']);
Route::post('/infermiere/VisiteHandiquape', [App\Http\Controllers\VisiteHandiquapeController::class, 'store']);
Route::get('/infermiere/VisiteGrocesse', [App\Http\Controllers\VisiteGrocesseController::class, 'Grocesse']);
Route::post('/infermiere/VisiteGrocesse', [App\Http\Controllers\VisiteGrocesseController::class, 'store']);
Route::get('/infermiere/VisiteAudiogramme', [App\Http\Controllers\VisiteAudiogrammeController::class, 'Audiogramme']);
Route::post('/infermiere/VisiteAudiogramme', [App\Http\Controllers\VisiteAudiogrammeController::class, 'store']);
Route::get('/assistante/login', [App\Http\Controllers\AssistanteController::class, 'login']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
