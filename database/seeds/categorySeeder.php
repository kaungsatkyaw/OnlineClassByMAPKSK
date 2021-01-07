<?php

use Illuminate\Database\Seeder;
use App\Category;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Bussiness'],
            ['name' => 'Marketing'],
            ['name' => 'Design'], 
            ['name' => 'Database'],
            ['name' => 'Program'],
        ];
        foreach($categories as $category){
            Category::create($category);
        }
    }
}
