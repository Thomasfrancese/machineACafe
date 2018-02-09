<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    function boissons()
    {
        return $this->belongsTo('App\Boisson');
    }
    //
}
