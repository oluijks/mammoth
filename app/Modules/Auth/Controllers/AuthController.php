<?php

/**
 * Registration & Login Controller
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Modules\Auth\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Mammoth\Http\Controllers\Controller;
use Mammoth\Modules\Auth\Models\User;
use ReCaptcha\ReCaptcha;
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
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('Auth::'.config('mammoth.theme', 'default').'.sign-in');
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        auth()->logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/')
            ->with('status', trans('Auth::auth.sign-out-message'))
            ->with('type', 'success')
            ->with('image', 'Mammoth_Seated_48x48.png'); // Todo: move this to config
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('Auth::'.config('mammoth.theme', 'default').'.sign-up');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        // Do Google reCAPTCHA validation
        if (config('mammoth.google_recaptcha')) {
            if ('' !== env('GOOGLE_RECAPTCHA_SITE_KEY') && '' !== env('GOOGLE_RECAPTCHA_SECRET_KEY')) {
                if ($request->has('g-recaptcha-response')) {
                    $recaptcha = new ReCaptcha(env('GOOGLE_RECAPTCHA_SECRET_KEY'));
                    $resp = $recaptcha->verify($request->input('g-recaptcha-response'), $request->ip());
                    if (! $resp->isSuccess()) {
                        $errors = $resp->getErrorCodes();
                        // Todo: fix this, same as below; add errors
                    }
                } else {
                    $validator = Validator::make($request->all(), [
                        'g-recaptcha-response' => 'required',
                    ]);
                    if ($validator->fails()) {
                        return back()
                            ->withErrors($validator)
                            ->withInput();
                    }
                }
            } else {
                // Todo: Throw exception?
                Log::error('Google reCAPTCHA Site key or Secret key not set.');
            }
        }

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        auth()->login($this->create($request->all()));

        return redirect($this->redirectPath())
            ->with('status', trans('Auth::auth.sign-in-message', ['name' => auth()->user()->name]))
            ->with('type', 'success')
            ->with('image', 'Mammoth_Happy_48x48.png'); // Todo: move this to config
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        // Todo: perhaps Google reCAPTCHA validation here as well
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if (auth()->attempt($credentials, (int)$request->has('remember'))) {
            return $this->handleUserWasAuthenticated($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
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
        // Todo, only admins should go everywere
        return redirect()->intended('/')
            ->with('status', trans('Auth::auth.sign-in-message', ['name' => $user->name]))
            ->with('type', 'success')
            ->with('image', 'Mammoth_Happy_48x48.png'); // Todo: move this to config
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // Todo: put validator settings in config
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
}
