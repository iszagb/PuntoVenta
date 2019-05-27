<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pedido extends Model
{
  use SoftDeletes;
  public function mesa()
  {
      return $this->belongsTo(Mesa::class);
  }
  public function productos()
  {
      return $this->hasMany('App\Producto','id','producto_id');
  }

  public function getCantPlatAttribute()
    {
        return $this->platillo . " son: " . $this->cantidad;
    }
}
