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

//Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'EmployeController@index')->name('home');
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
Route::resource('mobilite', MobiliteController::class);
Route::resource('conge', CongeController::class);
Route::resource('responsabilite', ResponsabiliteController::class);
Route::resource('occupe', OccupeController::class);
Route::resource('hierarchie', HierarchieController::class);
Route::resource('imputation', ImputationController::class);
Route::resource('enfant', EnfantController::class);
Route::resource('docenfant', DocenfantController::class);

Auth::routes();

Route::post('/candidat/search', 'CandidatController@search')->name('candidat.search');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/prolongation/candidat/{id}/{candidat}', 'ProlongationController@getCandidatId')->name('prolonger.by.id');
Route::get('users/export/', 'CandidatController@export')->name('export.candidat');
Route::get('/responsabilite/by/employe/{id}', 'ResponsabiliteController@getByEmploye')->name('responsabilite.employe');
Route::get('/poste/by/employe/{id}', 'OccupeController@getByEmploye')->name('poste.employe');
Route::get('/conge/by/employe/{id}', 'CongeController@getCongeByEmploye')->name('conge.employe');
Route::get('/create/conge/by/employe/{id}', 'CongeController@createByEmploye')->name('create.conge.employe');
Route::get('/enfant/employei/{id}', 'EnfantController@getEnfantByEmploye')->name('enfant.employe');
Route::get('/imputation/employe/{id}', 'ImputationController@getImputationByEmploye')->name('imputation.employe');

Route::post('/save/document/employe', 'EmployeController@storeDocument')->name('document.save.employe');
Route::post('/import/excel', 'EmployeController@importExcel')->name('import.excel');

Route::get('/home', 'HomeController@index')->name('home');Route::get('/home', 'HomeController@index')->name('home');
Route::get('/employe/test/{id}', 'EmployeController@test')->name('employe.test');

