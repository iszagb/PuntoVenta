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
            $table->string('mesa');
            $table->string('platillo');
            $table->smallInteger('cantidad');
            $table->timestamps();

            $table->foreign('mesa')
                ->references('mesa_id')->on('mesas')
                ->onDelete('cascade');
        });

        Schema::create('mesa_pedido', function (Blueprint $table) {
            $table->string('mesa_id')->unique();
            $table->unsignedInteger('pedido_id');
            $table->foreign('mesa_id')
                ->references('mesa_id')
                ->on('mesas')
                ->onDelete('cascade');
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos');
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
        Schema::dropIfExists('mesa_pedido');
    }
}
