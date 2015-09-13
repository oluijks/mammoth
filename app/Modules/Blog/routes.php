<?php

/**
 * Blog routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Blog', 'namespace' => 'Mammoth\Modules\Blog\Controllers'], function () {

    Route::resource('/blog', 'BlogController');

});
