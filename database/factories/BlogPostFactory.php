<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'title' => $this->faker->sentence, //Generates a fake sentence
        'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
        'user_id' => User::factory()
    ];
});
