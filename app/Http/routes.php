<?php

/**
 * Application routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

get('/', function () {
    return view('welcome');
});

get('/about', function () {
    return view('pages.about');
});

get('/contact', function () {
    return view('pages.contact');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
