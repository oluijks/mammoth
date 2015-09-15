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

    public function testVisitWelcomePageExpectsToSee()
    {
        $this->visit('/')
             ->see('Big mammoth is BIG!');
    }


    public function testVisitAboutPageExpectsToSeeAboutPage()
    {
        $this->visit('/about')
             ->see('About');
    }

    public function testVisitContactPageExpectsToSeeContactPage()
    {
        $this->visit('/contact')
             ->see('Contact');
    }

    public function testVisitCreditsPageExpectsToSeeCreditsPage()
    {
        $this->visit('/credits')
             ->see('M-Credits');
    }

    public function te()
    {
        $this->visit('/')
             ->click('View M-App')
             ->seePageIs('/blog');
    }

    public function testVisitWelcomePageClicksViewMBlogSeePageIsMBlog()
    {
        $this->visit('/')
             ->click('View M-Blog')
             ->seePageIs('/blog');
    }

    public function testVisitWelcomePageClicksViewMForumSeePageIsMForum()
    {
        $this->visit('/')
             ->click('View M-Forum')
             ->seePageIs('/blog');
    }

    public function testVisitWelcomePageClicksViewMHerdSeePageIsMHerd()
    {
        $this->visit('/')
             ->click('View M-Herd')
             ->seePageIs('/blog');
    }

    public function testVisitWelcomePageClicksSignInSeePageIsSignInPage()
    {
        $this->visit('/')
             ->click('Sign in')
             ->seePageIs('/sign-in');
    }

    public function testVisitWelcomePageClicksSignUpSeePageIsSignUpPage()
    {
        $this->visit('/')
             ->click('Sign up')
             ->seePageIs('/sign-up');
    }
}
