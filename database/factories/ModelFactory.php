<?php

/**
 * Model Factories
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

$factory->defineAs(Mammoth\User::class, 'admin', function (Faker\Generator $faker) {
    return [
        'name' => 'Administrator',
        'email' => 'admin@mammoth-app.com',
        'password' => bcrypt('admin@mammoth-app.com'),
    ];
});

$factory->defineAs(Mammoth\User::class, 'oluijks', function (Faker\Generator $faker) {
    return [
        'name' => 'Olaf Luijks',
        'email' => 'oluijks@gmail.com',
        'password' => bcrypt('W1nsl@'),
    ];
});

$factory->define(Mammoth\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(60),
    ];
});
