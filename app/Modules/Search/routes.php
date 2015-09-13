<?php

/**
 * Search routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Search', 'namespace' => 'Mammoth\Modules\Search\Controllers'], function () {

    get('/search/{query?}', ['as' => 'search', 'uses' => 'SearchController@index']);

});
