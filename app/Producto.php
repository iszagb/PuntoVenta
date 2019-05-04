<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $guarded = ['id'];
  /**
   * Establece relación hacia un pedido
   * @return type
   */
  public function pedidos()
  {
      return $this->hasMany('App\Pedido');
  }
}
