<?php

/**
 * Admin Controller.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Admin\Controllers;

// use Illuminate\Http\Request;

// use Mammoth\Modules\Admin\Models\Admin;
use Mammoth\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Shows the admin dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Admin::dashboard');
    }
}
