<?php

/**
 * Pages controller.
 *
 * Copyright © 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Pages\Controllers;

use Mammoth\Modules\Quotes;
use Mammoth\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Shows the welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        $quote = Quotes::quote();

        return view('Pages::'.config('mammoth.theme', 'default').'.welcome')->with('quote', $quote);
    }

    /**
     * Shows the about page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('Pages::'.config('mammoth.theme', 'default').'.about');
    }

    /**
     * Shows the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('Pages::'.config('mammoth.theme', 'default').'.contact');
    }

    /**
     * Shows the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function credits()
    {
        return view('Pages::'.config('mammoth.theme', 'default').'.credits');
    }
}
