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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('service', ServiceController::class);
Route::resource('candidat', CandidatController::class);
Route::resource('autorisation', AutorisationController::class);
Route::resource('prolongation', ProlongationController::class);
Route::resource('document', DocumentController::class);
Route::resource('fonction', FonctionConroller::class);
Route::resource('contrat', ContratController::class);
Route::resource('categorie', CategorieController::class);
Route::resource('employeur', EmployeurController::class);
Route::resource('employe', EmployeController::class);
Route::resource('famille', FamilleController::class);
Route::resource('fonction', FonctionConroller::class);
Auth::routes();

Route::post('/candidat/search', 'CandidatController@search')->name('candidat.search');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prolongation/candidat/{id}/{candidat}', 'ProlongationController@getCandidatId')->name('prolonger.by.id');
Route::get('users/export/', 'CandidatController@export')->name('export.candidat');

Route::get('/home', 'HomeController@index')->name('home');
