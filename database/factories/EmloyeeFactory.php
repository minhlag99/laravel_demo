<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'employee_name' => $this->faker->user_name, //Generates a fake sentence
        'age' => $this->faker->is_integer, //generates fake 30 paragraphs
        'email' =>$this->faker->email
    ];
});
