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
        factory(App\Pedido::class, 25)->create();
    }
}
