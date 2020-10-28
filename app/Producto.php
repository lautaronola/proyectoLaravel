<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    public function user(){
      return $this->belongsTo('App\User', 'user_id');
    }
    //  public function photos(){
    //    return $this->hasMany('App\ImagesProducts', 'product_id');
    //  }

    public function categoria(){
      return $this->belongsTo('App\Categoria', 'category_id');
    }

    public function favorito(){
      return $this->belongsToMany('App\User', 'favoritos', 'product_id', 'user_id');
    }
}
