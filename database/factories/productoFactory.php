<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
      'nombre_Producto' => $faker->sentence(2),
      'precio' => $faker->randomDigit,
      'descripcion' => $faker->sentence(4),
    ];
});
