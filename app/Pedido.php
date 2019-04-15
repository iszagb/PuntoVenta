<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
  public function documentos()
  {
      return $this->belongsTo(Mesa::class);
  }
}
