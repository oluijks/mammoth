<?php

/**
 * Webshop Controller.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Webshop\Controllers;

use Mammoth\Modules\Webshop\Models\Sitemap;
use Mammoth\Http\Controllers\Controller;

class WebshopController extends Controller
{
    /**
     * Shows the webshop page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Webshop::'.config('mammoth.theme', 'default').'.index');
    }
}
