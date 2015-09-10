<?php

/**
 * Pages controller
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Http\Controllers;

use Illuminate\Http\Request;

use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Shows the welcome page
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Shows the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Shows the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

}
