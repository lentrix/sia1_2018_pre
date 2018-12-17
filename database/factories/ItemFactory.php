<?php

use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'barcode' => $faker->isbn13,
        'description' => $faker->sentence(4),
        'price' => $faker->randomFloat(2),
        'qty' => $faker->numberBetween(10, 500),
        'type' => $faker->randomElements(['grocery','clothing','medicine',
                    'wines & spirits', 'beverages','dairies','bed & bath'])[0]
    ];
});
