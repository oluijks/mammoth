<?php

/**
 * Model Factories
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

$factory->defineAs(Mammoth\Modules\Auth\Models\User::class, 'admin', function (Faker\Generator $faker) {
    return [
        'name' => 'Administrator',
        'email' => 'admin@mammoth-app.com',
        'password' => bcrypt('admin@mammoth-app.com'),
    ];
});

$factory->defineAs(Mammoth\Modules\Auth\Models\User::class, 'oluijks', function (Faker\Generator $faker) {
    return [
        'name' => 'Olaf Luijks',
        'email' => 'oluijks@gmail.com',
        'password' => bcrypt('W1nsl@'),
    ];
});

$factory->define(Mammoth\Modules\Auth\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(60),
    ];
});

$factory->define(Mammoth\Modules\Blog\Models\Blog::class, function (Faker\Generator $faker) {
    $slug = $faker->realText(50);
    return [
        'slug' => str_slug($slug),
        'title' => $slug,
        'excerpt' => $faker->realText(500),
        'body' => $faker->realText(1000),
        'created_at' => $faker->dateTimeBetween('-3 years'),
    ];
});
