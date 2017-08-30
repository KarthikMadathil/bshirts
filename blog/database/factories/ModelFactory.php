<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\product::class, function (Faker\Generator $faker) {

   return [
        
        'pattern' => $faker->colorName  ,
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 100, $max = 1000),
        'status' => '1',


    ];
});

$factory->define(App\front::class, function (Faker\Generator $faker) {

   return [
        'product_id'=>  $faker->unique()->randomDigit,
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});

$factory->define(App\collar::class, function (Faker\Generator $faker) {

   return [
        'front_id'=> rand(1,5),
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});

$factory->define(App\cuff::class, function (Faker\Generator $faker) {

   return [
        'front_id'=> rand(1,5),
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});

$factory->define(App\planket::class, function (Faker\Generator $faker) {

   return [
        'front_id'=> rand(1,5),
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});

$factory->define(App\pocket::class, function (Faker\Generator $faker) {

   return [
        'front_id'=> rand(1,5),
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});

$factory->define(App\sleeve::class, function (Faker\Generator $faker) {

   return [
        'front_id'=> rand(1,5),
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});


$factory->define(App\button::class, function (Faker\Generator $faker) {

   return [
        'front_id'=> rand(1,5),
        'pattern' => $faker->imageUrl($width = 640, $height = 480),
        'desc' => $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'rate' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        


    ];
});




