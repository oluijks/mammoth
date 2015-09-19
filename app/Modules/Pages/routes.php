<?php

/**
 * Pages routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Pages', 'namespace' => 'Mammoth\Modules\Pages\Controllers'], function () {

    get('/',        ['as' => 'home',    'uses' => 'PageController@welcome']);
    get('/about',   ['as' => 'about',   'uses' => 'PageController@about']);
    get('/contact', ['as' => 'contact', 'uses' => 'PageController@contact']);
    get('/credits', ['as' => 'credits', 'uses' => 'PageController@credits']);

});
