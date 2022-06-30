<?php

use Illuminate\Database\Seeder;
use Micropply\Crm\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 4)->create();
    }
}
