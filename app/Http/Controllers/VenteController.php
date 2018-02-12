<?php

namespace App\Http\Controllers;

use App\Boisson;
use App\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    /**Affiche toutes les ventes passées */

    public function listeVente()
    {

            $ventes = Vente::all();

        return view("ventes", ['ventes'=>$ventes]);
    }

    public function store(Request $request)
    {
        $ventes = new Vente();
        $ventes->sucre = request('sucre');
        $ventes->boisson_id = request('drinkName');
        $ventes->save();
        return redirect('/machineACafe');
    }
}

?>

