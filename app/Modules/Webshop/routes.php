<?php

/**
 * Webshop routes.
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
Route::group(['module' => 'Webshop', 'namespace' => 'Mammoth\Modules\Webshop\Controllers'], function () {

    Route::get('/webshop', ['as' => 'webshop', 'uses' => 'WebshopController@index']);

});
