<?php

use Faker\Generator as Faker;

$factory->define(App\Produtos::class, function (Faker $faker) {
    return [
        'descricao' => $faker->word(),
        'preco' => $faker->randomFloat(2,10,500),
    ];
});
