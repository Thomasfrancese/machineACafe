<?php

namespace App\Http\Controllers;

use App\Boisson;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MachineACafeController extends Controller
{
    function listDrink()
    {
        $drinkChoice = DB::select('select nomBoisson, id, prix from boissons');
        return view('machineACafe', ['boissons' => $drinkChoice]);
//        $drinkChoice = Boisson::all();
//        return view('machineACafe', ['boissons' => $drinkChoice]);
    }
//
//    function listDrink()
//
//    {
//
//        $drinkChoice = ['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
//
//        return view('machineACafe', compact('drinkChoice'));
//
//
//        $drinkChoice = DB::select('select nomBoisson, codeBoisson from boissons');
//
//        return view('machineACafe', ['boissons' => $drinkChoice]);
//    }

    function showDrink($code)
    {
        $drink = Boisson::where('id', [$code])->get();

        return view('boisson.boissons', ['detailBoissons' => $drink]);
    }
//    function create()
//    {
//        return view('machineACafe');
//    }
//    public function store(Request $request)
//    {
//        $select = new Boisson();
//
//        $select->nomBoisson = $request->input('nomBoisson');
//        $select->stock = $request->input('sucre');
//
//        $select->save();
//
//        return redirect('/machineACafe');
//    }
}

?>
