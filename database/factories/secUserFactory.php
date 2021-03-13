<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    $i = 1;
    return [
        'campus_id' => '1',
        'role_id' => '1',
        'name' => 'SEC Voter '.$i++. $faker->name,
        'phone' => '01840000108',
        'email' => $faker->unique()->safeEmail,
        'status' => '1',
        'password' => Hash::make(1234),
    ];
});
