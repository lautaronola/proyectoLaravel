<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

   protected $guarded = [];

   public function producto(){
     return $this->hasMany('App\Producto', 'category_id');
   }



}
