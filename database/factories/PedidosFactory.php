<?php

use Faker\Generator as Faker;

$factory->define(App\Pedidos::class, function (Faker $faker) {
    return [
        'mesa' => $faker->name,
        'platillo' => $faker->sentence(4),
        'cantidad' => $faker->randomDigit,
    ];
});
