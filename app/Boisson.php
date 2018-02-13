<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boisson extends Model
{
    protected $fillable = ['nomBoisson','prix'];
    public $timestamps=false;

    function vente()
    {
        return $this->hasMany('App\Vente');
    }

    function ingredient()
    {
        return $this->belongsToMany('App\Ingredient')->withPivot('quantite');
    }

}
