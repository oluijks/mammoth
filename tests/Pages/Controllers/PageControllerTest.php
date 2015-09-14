<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    public function testGetWelcomePageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }

    public function testGetAboutPageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/about');
        $this->assertEquals(200, $response->status());
    }

    public function testGetContactPageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/contact');
        $this->assertEquals(200, $response->status());
    }

    public function testGetCreditsPageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/credits');
        $this->assertEquals(200, $response->status());
    }

    public function testWelcomePageExpectsToSee()
    {
        $this->visit('/')
             ->see('Big mammoth is BIG!');
    }


    public function testAboutPageExpectsToSee()
    {
        $this->visit('/about')
             ->see('About');
    }

    public function testContactPageExpectsToSee()
    {
        $this->visit('/contact')
             ->see('Contact');
    }

    public function testCreditsPageExpectsToSee()
    {
        $this->visit('/credits')
             ->see('M-Credits');
    }

    public function testWelcomePageClicksViewMAppSeePageIsMApp()
    {
        $this->visit('/')
             ->click('View M-App')
             ->seePageIs('/blog');
    }

    public function testWelcomePageClicksViewMBlogSeePageIsMBlog()
    {
        $this->visit('/')
             ->click('View M-Blog')
             ->seePageIs('/blog');
    }

    public function testWelcomePageClicksViewMForumSeePageIsMForum()
    {
        $this->visit('/')
             ->click('View M-Forum')
             ->seePageIs('/blog');
    }

    public function testWelcomePageClicksViewMHerdSeePageIsMHerd()
    {
        $this->visit('/')
             ->click('View M-Herd')
             ->seePageIs('/blog');
    }

    public function testWelcomePageClicksSignInSeePageIsSignIn()
    {
        $this->visit('/')
             ->click('Sign in')
             ->seePageIs('/sign-in');
    }

    public function testWelcomePageClicksSignUpSeePageIsSignUp()
    {
        $this->visit('/')
             ->click('Sign up')
             ->seePageIs('/sign-up');
    }

    public function testSuccessfulSignUpSeePageIsWelcomePage()
    {
        $this->visit('/sign-up')
             ->type('John', 'name')
             ->type('john@doe.com', 'email')
             ->type('john@doe.com', 'password')
             ->type('john@doe.com', 'password_confirmation')
             ->press('Create account')
             ->seePageIs('/');
    }


}
