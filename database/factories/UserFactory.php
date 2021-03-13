<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $i = 1;
    // return [
    //     'campus_id' => '1',
    //     'role_id' => '1',
    //     'name' => 'SEC Voter '.$i++ . $faker->name,
    //     'phone' => '01840000108',
    //     'email' => $faker->unique()->safeEmail,
    //     'status' => '1',
    //     'password' => Hash::make(1234),
    // ];

    // return [
    //     'campus_id' => '2',
    //     'role_id' => '1',
    //     'name' => 'MEC Voter '.$i++ . $faker->name,
    //     'phone' => '01840000108',
    //     'email' => $faker->unique()->safeEmail,
    //     'status' => '1',
    //     'password' => Hash::make(1234),
    // ];

    // return [
    //     'campus_id' => '3',
    //     'role_id' => '1',
    //     'name' => 'FEC Voter '.$i++ . $faker->name,
    //     'phone' => '01840000108',
    //     'email' => $faker->unique()->safeEmail,
    //     'status' => '1',
    //     'password' => Hash::make(1234),
    // ];

    return [
        'campus_id' => '4',
        'role_id' => '1',
        'name' => 'BEC Voter '.$i++ . $faker->name,
        'phone' => '01840000108',
        'email' => $faker->unique()->safeEmail,
        'status' => '1',
        'password' => Hash::make(1234),
    ];






});
