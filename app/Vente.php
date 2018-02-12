<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $fillable = ['sucre'];

    function boisson()
    {
        return $this->belongsTo('App\Boisson');
    }
}
