<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CEO;
use Faker\Generator as Faker;

$factory->define(CEO::class, function (Faker $faker) {
    return [
        'name'                 => $this->faker->name,
        'company_name'         => $this->faker->title,
        'year'                 => now(),
        'company_headquarters' => $this->faker->sentence(10),
        'what_company_does'    => $this->faker->sentence(10),
    ];
});
