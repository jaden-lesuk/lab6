<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
   public function Review(){
       return $this->hasMany('App\Reviews', 'id');
   }
}
