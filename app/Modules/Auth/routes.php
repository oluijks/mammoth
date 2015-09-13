<?php

/**
 * Blog routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Auth', 'namespace' => 'Mammoth\Modules\Auth\Controllers'], function () {

    // Authentication routes
    get('/sign-in', ['as' => 'sign-in', 'uses'   => 'AuthController@getLogin']);
    post('auth/login', 'AuthController@postLogin');
    get('auth/logout', ['as' => 'sign-out', 'uses' => 'AuthController@getLogout']);

    // Registration routes
    get('/sign-up', ['as' => 'sign-up', 'uses' => 'AuthController@getRegister']);
    post('auth/register', 'AuthController@postRegister');

    // Password reset link request routes
    get('password/email', ['as' => 'email-password', 'uses' => 'PasswordController@getEmail']);
    post('password/email', 'PasswordController@postEmail');

    // Password reset routes
    get('password/reset/{token}', ['as' => 'reset-password', 'uses' => 'PasswordController@getReset']);
    post('password/reset', 'PasswordController@postReset');

});
