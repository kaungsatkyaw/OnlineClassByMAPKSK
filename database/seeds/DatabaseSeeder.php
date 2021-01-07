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
        $this->call(AdminSeeder::class);
        $this->call(categorySeeder::class);
        $this->call(teacherSeeder::class);
        $this->call(courseSeeder::class);
        $this->call(eventSeeder::class);
        $this->call(newsSeeder::class);
    }
}
