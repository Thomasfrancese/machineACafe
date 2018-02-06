<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;

class BoissonController extends Controller
{
    function showDrink()
    {
        $showBoissons = Boisson::all();

        return view('/boisson/boissons', ['boissons' => $showBoissons]);
    }

    function showDrinkList()
    {
        $showBoissons = Boisson::all();

        return view('/boisson/listBoisson', ['boissons' => $showBoissons]);
    }

    function trianom()
    {
        $showBoissonsOrder = Boisson::select('nomBoisson', 'prix')->orderBy('nomBoisson')->get();
        return view('/boisson/listBoisson', ['boissons' => $showBoissonsOrder]);
    }

    function triPrix()
    {
        $showBoissonsOrder = Boisson::select('prix', 'nomBoisson')->orderBy('prix')->get();
        return view('/boisson/listBoisson', ['boissons' => $showBoissonsOrder]);
    }

    public function create()
    {
        return view('formulaire');
    }

    public function store(Request $request)
    {
        $boisson = new Boisson();

        $boisson->nomBoisson = $request->input('drinkName');
        $boisson->prix = $request->input('choicePrice');

        $boisson->save();

        return redirect('/boisson/listBoisson');
    }

    public function modif($id)
    {
        $boisson = Boisson::where('id', $id)->get();
        return view('formulaireModif');
    }

    public function update(Request $request)
    {
        $boisson =new Boisson;
        $boisson->nomBoisson = $request->input('drinkName');
        $boisson->prix = $request->input('choicePrice');
        $boisson->save();


        return redirect('/boisson/listBoisson');
    }

}
