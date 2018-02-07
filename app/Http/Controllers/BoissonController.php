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
        $boisson = Boisson::find($id);
        return view('formulaireModif', ['boisson' => $boisson]);
    }

    public function update(Request $request, $id)
    {
        $boisson = Boisson::find($id);
        $boisson->nomBoisson = $request->input('drinkName');
        $boisson->prix = $request->input('choicePrice');
        $boisson->save();


        return redirect('/boisson/listBoisson');
    }

    public function delete($id)
    {
        $boisson = Boisson::find($id);
        $boisson->delete();

        return redirect('/boisson/listBoisson');
    }

}
