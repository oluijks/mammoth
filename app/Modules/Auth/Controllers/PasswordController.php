<?php

/**
 * Password Reset Controller.
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Modules\Auth\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;
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
     * @var string
     */
    protected $redirectPath = '/';

    /**
     * Create a new password controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return Response
     */
    public function getEmail()
    {
        return view('Auth::'.config('mammoth.theme', 'default').'.password');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postEmail(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect('/')
                    ->with('status', trans('Auth::'.$response))
                    ->with('type', 'success')
                    ->with('image', 'Mammoth_Happy_48x48.png'); // Todo: move this to config
            case Password::INVALID_USER:
                return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param string $token
     *
     * @return Response
     *
     * @throws NotFoundHttpException
     */
    public function getReset($token = null)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException();
        }

        return view('Auth::'.config('mammoth.theme', 'default').'.reset')->with('token', $token);
    }

    /**
     * Reset the given user's password.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function postReset(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath());

            default:
                return redirect()->back()
                    ->withInput($request->only('email'))
                    ->withErrors(['email' => trans($response)]);
        }
    }
}
