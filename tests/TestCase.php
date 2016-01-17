<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'https://mammoth-development.tk';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * Setup tests.
     */
    public function setUp()
    {
        parent::setUp();

        // $this->prepareForTests();
    }

    /**
     * Prepare for tests.
     */
    private function prepareForTests()
    {
        // Mail::pretend(true);
    }
}
