<?php
namespace App\Http\Controllers;


use App\Boisson;

class RecetteController extends Controller
{
    function listRecettes()
    {
        $recette = Boisson::all()->load('ingredient');

     return view('recettes',['recettes' => $recette]);
	}
}

?>

    
 

