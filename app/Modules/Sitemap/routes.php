<?php

/**
 * Sitemap routes
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

Route::group(['module' => 'Sitemap', 'namespace' => 'Mammoth\Modules\Sitemap\Controllers'], function () {

    Route::get('/sitemap', ['as' => 'sitemap', 'uses' => 'SitemapController@index']);

});
