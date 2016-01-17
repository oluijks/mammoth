<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageControllerTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * @test
     */
    public function GetWelcomePageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }

    /**
     * @test
     */
    public function GetAboutPageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/about');
        $this->assertEquals(200, $response->status());
    }

    /**
     * @test
     */
    public function GetContactPageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/contact');
        $this->assertEquals(200, $response->status());
    }

    /**
     * @test
     */
    public function GetCreditsPageExpectsResponseStatusOf200()
    {
        $response = $this->call('GET', '/credits');
        $this->assertEquals(200, $response->status());
    }

    /**
     * @test
     */
    public function VisitWelcomePageExpectsToSee()
    {
        $this->visit('/')
             ->see('Mammoth App is BIG, BIGGER, HUGE, HUMONGOUS!');
    }

    /**
     * @test
     */
    public function VisitAboutPageExpectsToSeeAboutPage()
    {
        $this->visit('/about')
             ->see('About');
    }

    /**
     * @test
     */
    public function VisitContactPageExpectsToSeeContactPage()
    {
        $this->visit('/contact')
             ->see('Contact');
    }

    /**
     * @test
     */
    public function VisitCreditsPageExpectsToSeeCreditsPage()
    {
        $this->visit('/credits')
             ->see('M-Credits');
    }

    /**
     * @test
     */
    public function VisitWelcomePageClicksViewMAppSeePageIsMApp()
    {
        $this->visit('/')
             ->click('mammoth-app-1')
             ->seePageIs('/blog');
    }

    /**
     * @test
     */
    public function VisitWelcomePageClicksViewMBlogSeePageIsMBlog()
    {
        $this->visit('/')
             ->click('mammoth-app-2')
             ->seePageIs('/blog');
    }

    /**
     * @test
     */
    public function VisitWelcomePageClicksViewMForumSeePageIsMForum()
    {
        $this->visit('/')
             ->click('mammoth-app-3')
             ->seePageIs('/blog');
    }

    /**
     * @test
     */
    public function VisitWelcomePageClicksViewMHerdSeePageIsMHerd()
    {
        $this->visit('/')
             ->click('mammoth-app-4')
             ->seePageIs('/blog');
    }

    /**
     * @test
     */
    public function VisitWelcomePageClicksSignInSeePageIsSignInPage()
    {
        $this->visit('/')
             ->click('Sign in')
             ->seePageIs('/sign-in');
    }

    /**
     * @test
     */
    public function VisitWelcomePageClicksSignUpSeePageIsSignUpPage()
    {
        $this->visit('/')
             ->click('Sign up')
             ->seePageIs('/sign-up');
    }
}
