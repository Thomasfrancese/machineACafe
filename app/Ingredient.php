<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['nomBoisson','stock'];

    function boisson()
    {
        return $this->belongsToMany('App\Boisson')->withPivot('quantite');
    }
    //
}
