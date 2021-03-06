<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'name_of_depositor' => $faker->word,
        'proof_of_payment' => $faker->text,
        'refund_details' => $faker->word,
        'refund_payment_details' => $faker->word,
        'category_id' => $faker->randomDigitNotNull,
        'course_id' => $faker->randomDigitNotNull,
        'amount' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'mode_of_payment' => $faker->word,
        'payment_processor' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
