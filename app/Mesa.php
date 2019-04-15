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
  public function user()
  {
      return $this->belongsToMany(Pedido::class);
  }
}
