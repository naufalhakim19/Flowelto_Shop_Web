<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(useeder::class);
        $this->call(cateseeder::class);
        $this->call(floseeder::class);
    }
}
