<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
    function listIngredients()
    {
        $showIngredients = Ingredient::all();

        return view('ingredients', ['ingredients' => $showIngredients]);
    }

    public function create()
    {
        return view('formulaireIngre');
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient();

        $ingredient->nomIngredient = $request->input('nomIngred');
        $ingredient->stock = $request->input('quantite');

        $ingredient->save();

        return redirect('/ingredients');
    }
}

?>
