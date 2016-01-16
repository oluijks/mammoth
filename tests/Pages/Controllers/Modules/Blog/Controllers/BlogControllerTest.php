<?php

// use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BlogControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * @test
     */
    public function VisitBlogPostPageExpectsToSeeBlogTitle()
    {
        $blog = factory(Mammoth\Modules\Blog\Models\Blog::class, 25)->create();
        $url = config('app.url').'/blog/'.$blog[0]->slug;

        $this->visit($url)
             ->see($blog[0]->title);
    }
}
