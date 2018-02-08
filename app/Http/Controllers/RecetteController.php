<?php
namespace App\Http\Controllers;

use App\Recette;

class RecetteController extends Controller
{
    function listRecettes()
    {
        $recette = Recette::all();

     return view('recette',['recettes' => $recette]);
	}
}

?>

    
 

