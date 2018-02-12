<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Vente;
use App\Boisson;

class MachineACafeController extends Controller
{
    function listDrink()
    {
//        $drinkChoice = DB::select('select nomBoisson, id, prix from boissons');
//        return view('machineACafe', ['boissons' => $drinkChoice]);
        $drinkChoice = Boisson::all();
        return view('machineACafe', ['boissons' => $drinkChoice]);
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
    public function store(Request $request)
    {
        $select = new Vente();
//        $boisson = Boisson::where('id',[request('drinkName')])->get()[0];
        $select->boisson_id = $request->input('drinkName');
//        $boisson->prix;
        $select->sucre = $request->input('sucre');

//        $select->
//        $select-> = $request->input('sucre');
        $select->save();

        return redirect('/machineACafe');
    }

}
?>
