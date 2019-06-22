<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function Car(){
        return $this->belongsTo('App\Car', 'id');
    }
}
