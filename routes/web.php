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

Route::get('/', 'IndexController@bienvenue');

Route::get('/machineACafe','MachineACafeController@listDrink');

Route::get('/ingredients','IngredientController@listIngredients');

Route::get('/ventes','VenteController@listeVente')->name('vente');

Route::get('/recettes','RecetteController@listRecettes');

Route::get('/gestionMonnaie','GestionMonnaieController@listMonnaie');

Route::get('/boisson/listBoisson', 'BoissonController@showDrinkList');

Route::get('/boisson/orderName', 'BoissonController@trianom');

Route::get('/boisson/orderPrice', 'BoissonController@triPrix');

Route::get('/boisson/{code}', 'MachineACafeController@showDrink');

Route::get('/formulaire', 'BoissonController@create');

Route::post('/boisson/listBoisson', 'BoissonController@store');

Route::get('/formulaireModif/{code}','BoissonController@modif');

Route::post('/boisson/listBoisson/{id}', 'BoissonController@update')->name('modifBoisson');

//Route::get('/formulaireSupp/{code}','BoissonController@supp');

Route::get('/boisson/listBoisson/{id}', 'BoissonController@delete')->name('suppBoisson');

//Route::post('/result', 'BoissonController@store');

?>
