<?php

namespace App\Http\Controllers;

use App\Boisson;
use App\Vente;
use App\Drink;
use http\Env\Request;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

 public function listeVente() {
  
    $venteTab = Vente::all();

    return view("ventes",["ventes" => $venteTab]);
  }
  public function store(Request $request)
  {
      $ventes = new Vente();
      $boisson = Boisson::whereNom(request('drinkName'))->get()[0];
      $ventes->boisson_id = $boisson->id;
      $ventes->sucre = request('sucre');
      $ventes->save();
      return redirect('/ventes');
  }
}
?>

