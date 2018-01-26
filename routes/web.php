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

Route::get('/index', 'IndexController@bienvenue');

Route::get('/machineACafe','MachineACafeController@listDrink');

Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente')->name('vente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

Route::get('/boisson/listBoisson', 'BoissonController@showDrinkList');

Route::get('/boisson/orderBoisson', 'BoissonController@trianom');

Route::get('/boisson/orderPrix', 'BoissonController@triPrix');

Route::get('/boisson/{code}', 'MachineACafeController@showDrink');

Route::get('/formulaire', 'FormulaireController@create');

Route::post('/result', 'FormulaireController@store');

?>
