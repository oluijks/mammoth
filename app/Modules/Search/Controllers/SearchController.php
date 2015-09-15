<?php

/**
 * Search Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Search\Controllers;

use Illuminate\Http\Request;

use Mammoth\Modules\Search\Models\Search;
use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Shows the search page
     *
     * @return \Illuminate\View\View
     */
    public function index($query)
    {
        return view('Search::index')->with('query', $query);
    }
}
