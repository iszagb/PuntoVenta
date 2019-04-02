<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class pedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert([
          'mesa' => 'mesa2',
          'platillo' => 'hot dog',
          'cantidad' => 1,
        ]);
        factory(App\Pedidos::class, 25)->create();
    }
}
