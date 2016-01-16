<?php

/**
 * Forum routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Forum', 'namespace' => 'Mammoth\Modules\Forum\Controllers'], function () {

    Route::get('/forum', ['as' => 'forum', 'uses' => 'ForumController@index']);

});
