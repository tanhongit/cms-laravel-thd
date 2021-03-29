<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'is_free' => $faker->word,
        'thumbnail' => $faker->word,
        'view_count' => $faker->randomDigitNotNull,
        'url' => $faker->word,
        'title' => $faker->word,
        'description' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
