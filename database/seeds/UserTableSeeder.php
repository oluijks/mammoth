<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mammoth\User::class, 'admin')->create();
        factory(Mammoth\User::class, 'oluijks')->create();
        factory(Mammoth\User::class, 48)->create();
    }
}
