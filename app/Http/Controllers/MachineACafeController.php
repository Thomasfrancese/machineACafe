<?php

namespace App\Http\Controllers;
use App\Boisson;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MachineACafeController extends Controller
{
  function listDrink()
  {
//    $drinkChoice = DB::select('select nomBoisson, codeBoisson from boisson');
//      return view('machineACafe', ['boissons' => $drinkChoice]);
      $drinkChoice = Boisson::all();
      return view('machineACafe', ['boissons' => $drinkChoice]);
  }

  function showDrink($code)
  {
    $drink = Boisson::where('codeBoisson' ,[$code])->get();

    return view('boisson.boissons',['detailBoissons' => $drink]);
  }
}
?>
