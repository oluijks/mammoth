<?php

/**
 * Herd Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Herd\Controllers;

use Illuminate\Http\Request;

use Mammoth\Modules\Herd\Models\Herd;
use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class HerdController extends Controller
{
    /**
     * Shows the social index page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Herd::index');
    }
}
