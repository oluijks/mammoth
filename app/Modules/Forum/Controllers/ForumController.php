<?php

/**
 * Forum Controller.
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Forum\Controllers;

use Mammoth\Modules\Forum\Models\Forum;
use Mammoth\Http\Controllers\Controller;

class ForumController extends Controller
{
    /**
     * Shows the forum index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Forum::'.config('mammoth.theme', 'default').'.index');
    }
}
