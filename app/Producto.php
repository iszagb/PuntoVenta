<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
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
