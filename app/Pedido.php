<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  public function pedidos()
  {
      return $this->belongsTo(Mesa::class);
  }
}
