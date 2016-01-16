<?php

/**
 * Search Controller.
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Search\Controllers;

use Illuminate\Http\Request;
// use Mammoth\Modules\Search\Models\Search;
use Mammoth\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Shows the search page.
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = $request->input('searchInput');

        return view('Search::'.config('mammoth.theme', 'default').'.index', compact('query'));
    }
}
