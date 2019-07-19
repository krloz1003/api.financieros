<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Models\Example\Movie;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Movie::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'genre' => $gender,
        'year' => $faker->date($format = 'Y', $max = 'now'),
        'duration' => $faker->numberBetween($min = 1, $max = 3).'h '.str_pad($faker->numberBetween($min = 1, $max = 59), 2, "0", STR_PAD_LEFT).'m'   //Str::random(10),        
    ];
});