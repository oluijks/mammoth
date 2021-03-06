<?php

/**
 * User table seeder.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(Mammoth\Modules\Auth\Models\User::class, 'admin')->create();
        factory(Mammoth\Modules\Auth\Models\User::class, 'oluijks')->create();
        factory(Mammoth\Modules\Auth\Models\User::class, 48)->create();
    }
}
