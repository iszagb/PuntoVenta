<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class Producto extends Model
{
  public function scopeBara($query)
  {
      return $query->where('precio', '<', 5);
  }

  protected $guarded = ['id'];
  protected $fillable = [
      'nombre_Producto', 'precio', 'descripcion',
  ];
  /**
   * Establece relación hacia un pedido
   * @return type
   */
  public function pedido()
  {
      return $this->belongsTo('App\Pedido');
  }

  public function archivos()
    {
        return $this->morphMany('App\Archivo', 'modelo');
    }


}
