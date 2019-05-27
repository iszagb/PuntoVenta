<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
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

  public function setNomMesaAttribute($mesa)
    {
        $this->attributes['mesa'] = strtoupper($mesa);
    }
}
