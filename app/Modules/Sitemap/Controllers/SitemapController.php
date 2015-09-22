<?php

/**
 * Sitemap Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Sitemap\Controllers;

use Illuminate\Http\Request;

use Mammoth\Modules\Sitemap\Models\Sitemap;
use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class SitemapController extends Controller
{
    /**
     * Shows the sitemap page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Sitemap::'.config('mammoth.theme', 'default').'.index');
    }
}
