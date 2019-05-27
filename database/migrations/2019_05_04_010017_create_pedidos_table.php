<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pedidos', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('mesa_id');
          $table->unsignedInteger('producto_id');
          $table->string('platillo');
          $table->smallInteger('cantidad');
          $table->timestamps();
          $table->softDeletes();

          $table->foreign('mesa_id')
              ->references('id')->on('mesas')
              ->onDelete('cascade');

          $table->foreign('producto_id')
              ->references('id')->on('productos')
              ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
