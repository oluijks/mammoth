<?php

/**
 * Herd routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Herd', 'namespace' => 'Mammoth\Modules\Herd\Controllers'], function () {

    Route::get('/herd', ['as' => 'herd', 'uses' => 'HerdController@index']);

});
