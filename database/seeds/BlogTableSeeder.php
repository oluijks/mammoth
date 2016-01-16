<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(Mammoth\Modules\Blog\Models\Blog::class, 25)->create();
    }
}
