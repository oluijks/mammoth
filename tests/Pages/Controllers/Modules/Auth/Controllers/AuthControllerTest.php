<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * @test
     */
    public function VisitSignUpAndSuccessfulSignUpSeePageIsWelcomePageAndSeeUsersEmailInDatabase()
    {
        $this->visit('/sign-up')
            ->type('John', 'name')
            ->type('john@doe.com', 'email')
            ->type('john@doe.com', 'password')
            ->type('john@doe.com', 'password_confirmation')
            ->press('Create account')
            ->seePageIs('/')
            ->seeInDatabase('users', ['email' => 'john@doe.com']);
    }

    /**
     * @test
     */
    public function VisitSignInAndSuccessfulSignInAsAdministratorExpectsSeePageIsAdmin()
    {
        factory(Mammoth\Modules\Auth\Models\User::class, 'admin')->create();

        $this->visit('/admin')
            ->type('admin@mammoth-app.com', 'email')
            ->type('admin@mammoth-app.com', 'password')
            ->press('Sign in')
            ->seePageIs('/admin');
    }

    /**
     * @test
     */
    public function VisitAdminPageUnSuccessfulSignInAsAdminExpectsToSeeCredentialsDoNotMatchErrorAndGetsRedirectedBack()
    {
        $user = factory(Mammoth\Modules\Auth\Models\User::class, 'admin')->make();

        $this->visit('/admin')
            ->type($user->email, 'email')
            ->type('test', 'password')
            ->press('Sign in')
            ->see('These credentials do not match our records.')
            ->seePageIs('/sign-in');
    }

    /**
     * @test
     */
    public function UnSuccessfulSignInAsAdminExpectsToSeePasswordFieldRequiredErrorAndGetsRedirectedBack()
    {
        $user = factory(Mammoth\Modules\Auth\Models\User::class, 'admin')->create();

        $this->visit('/admin')
             ->type($user->email, 'email')
             ->type('', 'password')
             ->press('Sign in')
             ->see('The password field is required.')
             ->seePageIs('/sign-in');
    }

    /**
     * @test
     */
    public function VisitSignPageWhileAlreadySignedInExpectsToGetRedirectedBackToWelcomePage()
    {
        $user = factory(Mammoth\Modules\Auth\Models\User::class, 'oluijks')->create();
        $this->be($user);

        $this->visit('/sign-in')
            ->seePageIs('/');
    }
}
