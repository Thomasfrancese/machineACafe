<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boisson;

class BoissonController extends Controller
{
  function showDrink()
  {
  $showBoissons = Boisson::all();

  return view('/boisson/boissons', ['boissons' =>$showBoissons]);
  }

    function showDrinkList()
    {
        $showBoissons = Boisson::all();

        return view('/boisson/listBoisson', ['boissons' =>$showBoissons]);
    }

  function trianom()
  {
      $showBoissonsOrder = Boisson::select('nomBoisson')->orderBy('nomBoisson')->get();
      return view('/boisson/orderBoisson', ['boissons' =>$showBoissonsOrder]);
  }

  function triPrix()
  {
      $showBoissonsOrder = Boisson::select('prix','nomBoisson')->orderBy('prix')->get();
      return view('/boisson/orderPrix', ['boissons' =>$showBoissonsOrder]);
  }

}
