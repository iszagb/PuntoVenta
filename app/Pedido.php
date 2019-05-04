<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  public function mesa()
  {
      return $this->belongsTo(Mesa::class);
  }
  public function producto()
  {
      return $this->belongsTo(Producto::class);
  }
}
