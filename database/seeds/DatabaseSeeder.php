<?php

/**
 * Database seeders
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->command->info('User table seeded!');

        Model::reguard();
    }
}
