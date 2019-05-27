<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
  protected $guarded = ['id'];

  public function user()
  {
      return $this->belongsTo(User::class);
  }

  public function producto()
  {
      return $this->belongsTo(Producto::class);
  }
}
