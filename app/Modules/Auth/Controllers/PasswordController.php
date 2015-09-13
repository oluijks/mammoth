<?php

/**
 * Password Reset Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Auth\Controllers;

use Mammoth\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{

    use ResetsPasswords;

    /**
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new password controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
