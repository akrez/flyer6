<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
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
    return [
        'name' => 'ropco',
        'email' => 'info@ropco.ir',
        'email_verified_at' => null,
        'password' => '$2y$10$6781/mW3MLmCRilyJI3PueGjiTYtwBAD5YJvllRleWcvy4f5hBgSO', //Admin1234
        'remember_token' => '6jR67t3F5AmLjlpryTQHjssICjjH7frOamYaH72sXnSbwsR7PTHgfjoRlDp2',
    ];
});
