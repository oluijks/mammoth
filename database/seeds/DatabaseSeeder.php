<?php

/**
 * Database seeders.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');

        $this->call(BlogTableSeeder::class);
        $this->command->info('Blog table seeded!');

        // Model::reguard();
    }
}
