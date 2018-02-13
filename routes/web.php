<?php

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
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@bienvenue');

Route::get('/machineACafe/','MachineACafeController@listDrink');

//Route::get('/machineACafe/Add', 'MachineACafeController@create');

Route::post('/machineACafe/', 'VenteController@store')->middleware('auth');


//Route::get('/machineACafe','MachineACafeController@createSelect');

//Route::get('/machineACafe', 'MachineACafeController@create');
//
//Route::post('/machineACafe', 'MachineACafeController@store');

// Ingredients

Route::get('/ingredients','IngredientController@listIngredients')->middleware('auth');

Route::get('/formulaireIngre','IngredientController@create')->middleware('auth');

Route::post('/ingredients', 'IngredientController@store')->middleware('auth');

Route::get('/formulaireIngreModif/{code}', 'IngredientController@ingredientModif')->middleware('auth');

Route::put('/ingredients/{id}', 'IngredientController@update')->name('modifIngredient')->middleware('auth');

Route::get('/formulaireIngreSupp/{code}', 'IngredientController@ingredientSupp')->middleware('auth');

Route::delete('/ingredients/{id}', 'IngredientController@delete')->name('suppIngredient')->middleware('auth');

// Vente

Route::get('/ventes','VenteController@listeVente')->name('vente')->middleware('auth');

Route::post('/ventes','VenteController@store')->name('venteAdd')->middleware('auth');

Route::get('/recettes','RecetteController@listRecettes')->middleware('auth');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie')->middleware('auth');

//Boisson

Route::get('/boisson/listBoisson', 'BoissonController@showDrinkList');

Route::get('/boisson/orderName', 'BoissonController@trianom');

Route::get('/boisson/orderPrice', 'BoissonController@triPrix');

Route::get('/boisson/{code}', 'MachineACafeController@showDrink');

Route::get('/formulaire', 'BoissonController@create')->middleware('auth');

Route::post('/boisson/listBoisson', 'BoissonController@store')->middleware('auth');

Route::get('/formulaireModif/{code}','BoissonController@modif')->middleware('auth');

Route::put('/boisson/listBoisson/{id}', 'BoissonController@update')->name('modifBoisson')->middleware('auth');

//Route::get('/formulaireSupp/{code}','BoissonController@supp');

Route::get('/formulaireSupp/{code}','BoissonController@boissonSupp')->middleware('auth');

Route::delete('/boisson/listBoisson/{id}', 'BoissonController@delete')->name('suppBoisson')->middleware('auth');

//Route::post('/result', 'BoissonController@store');



?>


