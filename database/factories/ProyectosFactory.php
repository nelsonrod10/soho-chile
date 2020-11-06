<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'empresa' => $faker->company,
        'nombre_proyecto' => $faker->title,
        'descripcion' => $faker->text(100),
        'tags' => $faker->text(30),
        'logo' => $faker->title,
        'imagen' => $faker->title,
    ];
});
