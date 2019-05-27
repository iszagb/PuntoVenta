<?php

use Faker\Generator as Faker;

$factory->define(App\Pedido::class, function (Faker $faker) {
    return [
        'mesa_id' => $faker->randomDigit,
        'producto_id' => $faker->randomDigit,
        'platillo' => $faker->sentence(4),
        'cantidad' => $faker->randomDigit,
    ];
});
