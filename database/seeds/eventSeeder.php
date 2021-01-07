<?php

use Illuminate\Database\Seeder;
use App\Event;

class eventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'title' => "The dos and don'ts of writing a personal statement for languages",
                'image' => '1.jpg',
                'place' => 'Center Building, Block A',
                'time' => '08:00 AM - 10:00 AM',
                'date' => '24 Mar 2018',
            ],
            [
                'title' => "University interview tips: confidence won't make up for flannel",
                'image' => '2.jpg',
                'place' => 'Center Building, Block A',
                'time' => '08:00 AM - 10:00 AM',
                'date' => '22 Mar 2018',
            ],
        ];
        foreach($events as $event){
            Event::create($event);
        }
    }
}
