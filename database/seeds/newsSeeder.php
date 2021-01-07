<?php

use Illuminate\Database\Seeder;
use App\Pagenew;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            [
                'title' => 'Parents who try to be their children’s best friends',
                'description' => 'Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet.',
                'image' => '1.jpg',
                'category_id' => '1'
            ],
            [
                'title' => 'Graduations could be delayed as external examiners',
                'description' => 'Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet.',
                'image' => '2.jpg',
                'category_id' => '1'
            ],
            [
                'title' => 'Private schools adopt a Ucas style application system',
                'description' => 'Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet.',
                'image' => '3.jpg',
                'category_id' => '3'
            ],
            [
                'title' => 'Cambridge digs in at the top of university league table',
                'description' => 'Integer luctus diam ac scerisque consectetur. Vimus dot euismod neganeco lacus sit amet.',
                'image' => '4.jpg',
                'category_id' => '2'
            ],
        ];
        foreach($news as $new){
            Pagenew::create($new);
        }  
    }
}
