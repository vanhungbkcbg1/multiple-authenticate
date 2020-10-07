<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Admin::class, function (Faker $faker) {
    return [
        //
        "name"=>$faker->name,
        "email"=>$faker->unique()->safeEmail,
        "password"=>\Illuminate\Support\Facades\Hash::make(123456)
    ];
});
