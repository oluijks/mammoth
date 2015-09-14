<?php

/**
 * Admin Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Admin\Controllers;

use Illuminate\Http\Request;

use Mammoth\Modules\Admin\Models\Admin;
use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Shows the admin index page
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('Admin::dashboard');
    }
}
