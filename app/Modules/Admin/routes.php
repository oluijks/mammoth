<?php

/**
 * Admin routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Admin', 'namespace' => 'Mammoth\Modules\Admin\Controllers'], function () {

    // get('/admin', ['as' => 'admin', 'uses' => 'AdminController@index']);
    get('/admin', ['as' => 'admin-dashboard', 'uses' => 'AdminDashboardController@index']);

    Route::resource('/admin/blog', 'AdminBlogController');

});
