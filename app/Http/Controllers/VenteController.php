<?php

namespace App\Http\Controllers;

use App\Vente;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

 public function listeVente() {
  
    $venteTab = Vente::all();

    
    return view("ventes",["ventes" => $venteTab]);
  }
}
?>

