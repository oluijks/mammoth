<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PasswordControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * @test
     */
    public function VisitWelcomePageClicksSignInClicksForgotPassword()
    {
        $user = factory(Mammoth\Modules\Auth\Models\User::class, 'oluijks')->create();

        $this->visit('/')
            ->click('Sign in')
            ->click('Forgot Password?')
            ->seePageIs('/password/email')
            ->visit('/password/email')
            ->type($user->email, 'email')
            ->press('Send Password Reset Link')
            ->seePageIs('/');
    }
}
