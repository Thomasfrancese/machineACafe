<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Boisson;
use App\Ingredient;


class BoissonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function showDrink()
    {
        $showBoissons = Boisson::all();

        return view('/boisson/boissons', ['boissons' => $showBoissons]);
    }
    function showDrinkSelect()
    {
        $showBoissons = Boisson::all();

        return view('/machineACafe', ['boissonSelect' => $showBoissons]);
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
//        $ingredient = new Ingredient();
//        $vente = new Vente();

        $boisson->nomBoisson = $request->input('drinkName');
        $boisson->prix = $request->input('choicePrice');

//        $boisson->ingredient->ingredient_id = $request->input('choixIngre');
//        $ingredient->
//        $vente->nameDrink = $request->input('drinkName');
//        $vente->sucre = $request->input('sucre');
//        $vente->prix = $request->input('choicePrice');
//        $vente->boisson_id = $request->input('id');
//        $vente->boisson_id = $request->input('id');


        $boisson->save();
//        $vente->save();

        return redirect('/boisson/listBoisson');
    }

//    public function createSelect()
//    {
//        return view('machineACafe');
//    }
//
//    public function storeSelect(Request $request)
//    {
//        $boisson = new Boisson();
//        $vente = new Vente();
//
//        $boisson->nomBoisson = $request->input('drinkName');
//        $boisson->prix = $request->input('choicePrice');
//        $vente->nameDrink = $request->input('drinkName');
//        $vente->sucre = $request->input('sucre');
//        $vente->prix = $request->input('choicePrice');
////        $vente->boisson_id = $request->input('id');
////        $vente->boisson_id = $request->input('id');
//
//
//        $vente->save();
//
//        return redirect('/machineACafe');
//    }

    public function modif($id)
    {
        $boisson = Boisson::find($id);
        return view('formulaireModif', ['boissons' => $boisson]);
    }

    public function update(Request $request, $id)
    {
        $boisson = Boisson::find($id);
        $boisson->nomBoisson = $request->input('drinkName');
        $boisson->prix = $request->input('choicePrice');
        $boisson->boisson_id = $request->input('drinkName');
        $boisson->ingredient_id = $request->input('choixIngre');
        $boisson->quantite = $request->input('choixDose');
        $boisson->save();


        return redirect('/boisson/listBoisson');
    }

    public function boissonSupp($id)
    {
        $boisson = Boisson::find($id);
        return view('formulaireSupp', ['boissons' => $boisson]);
    }

    public function delete($id)
    {
        $boisson = Boisson::find($id);
        $boisson->delete();

        return redirect('/boisson/listBoisson');
    }

}
