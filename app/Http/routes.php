<?php

/**
 * Application routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

get('/', ['as' => 'home', 'uses' => 'PageController@welcome']);
get('/about', ['as' => 'about', 'uses' => 'PageController@about']);
get('/contact', ['as' => 'contact', 'uses' => 'PageController@contact']);

// Authentication routes
get('/sign-in', ['as' => 'sign-in', 'uses' => 'Auth\AuthController@getLogin']);
post('auth/login', 'Auth\AuthController@postLogin');
get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
get('/sign-up', ['as' => 'sign-up', 'uses' => 'Auth\AuthController@getRegister']);
post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
get('password/email', ['as' => 'email-password', 'uses' => 'Auth\PasswordController@getEmail']);
post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
get('password/reset/{token}', ['as' => 'reset-password', 'uses' => 'Auth\PasswordController@getReset']);
post('password/reset', 'Auth\PasswordController@postReset');
