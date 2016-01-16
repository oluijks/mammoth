<?php

/**
 * Blog routes.
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
Route::group(['module' => 'Auth', 'namespace' => 'Mammoth\Modules\Auth\Controllers'], function () {

    // Authentication routes
    Route::get('/sign-in', ['as' => 'sign-in', 'uses' => 'AuthController@getLogin']);
    Route::post('auth/login', 'AuthController@postLogin');
    Route::get('auth/logout', ['as' => 'sign-out', 'uses' => 'AuthController@getLogout']);

    // Registration routes
    Route::get('/sign-up', ['as' => 'sign-up', 'uses' => 'AuthController@getRegister']);
    Route::post('auth/register', 'AuthController@postRegister');

    // Password reset link request routes
    Route::get('password/email', ['as' => 'email-password', 'uses' => 'PasswordController@getEmail']);
    Route::post('password/email', 'PasswordController@postEmail');

    // Password reset routes
    Route::get('password/reset/{token}', ['as' => 'reset-password', 'uses' => 'PasswordController@getReset']);
    Route::post('password/reset', 'PasswordController@postReset');

});
