<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Boisson;

class FormulaireController extends Controller
{

  public function create()
{
    return view('formulaire');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $data = [
        'choice' => [
            'drinkName' => $request->input('drinkName'),
        ],
    ];
    return view('result',$data);
    //
}
}

 ?>
