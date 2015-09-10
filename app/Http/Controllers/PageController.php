<?php

namespace Mammoth\Http\Controllers;

use Illuminate\Http\Request;

use Mammoth\Http\Requests;
use Mammoth\Http\Controllers\Controller;

class PageController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
