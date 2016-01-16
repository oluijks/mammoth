<?php

/**
 * Pages routes.
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
Route::group(['module' => 'Pages', 'namespace' => 'Mammoth\Modules\Pages\Controllers'], function () {

    Route::get('/',        ['as' => 'home',    'uses' => 'PageController@welcome']);
    Route::get('/about',   ['as' => 'about',   'uses' => 'PageController@about']);
    Route::get('/contact', ['as' => 'contact', 'uses' => 'PageController@contact']);
    Route::get('/credits', ['as' => 'credits', 'uses' => 'PageController@credits']);

});
