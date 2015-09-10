<?php

/**
 * Registration & Login Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mammoth\Http\Controllers\Controller;
use Mammoth\User;
use Validator;

class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * @var string
     */
    protected $loginPath = '/sign-in';

    /**
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * @var string
     */
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::login($this->create($request->all()));

        return redirect($this->redirectPath())
            ->with('status', trans('auth.sign-in-message', ['name' => Auth::user()->name]))
            ->with('type', 'info')
            ->with('image', 'mammoth_happy.png');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
    protected function authenticated(Request $request, User $user)
    {
        return redirect('/')
            ->with('status', trans('auth.sign-in-message', ['name' => $user->name]))
            ->with('type', 'info')
            ->with('image', 'mammoth_happy.png');
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/')
            ->with('status', trans('auth.sign-out-message'))
            ->with('type', 'info')
            ->with('image', 'mammoth_seated.png');
    }
}
