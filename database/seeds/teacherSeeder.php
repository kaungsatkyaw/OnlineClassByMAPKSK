<?php

use Illuminate\Database\Seeder;
use App\Teacher;

class teacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'name' => 'Sasha Johnson',
                'email' => 'Sasha@gmail.com',
                'image' => '1.jpg',
                'position' => 'teacher',
                'workingat' => 'UCSY',
                'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum a"
            ],
            [
                'name' => 'Darmian Shaw',
                'email' => 'Shaw@gmail.com',
                'image' => '2.jpg',
                'position' => 'teacher',
                'workingat' => 'UCSY',
                'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum autem corrupti"
            ],
            [
                'name' => 'Joshua Matt',
                'email' => 'Matt@gmail.com',
                'image' => '3.jpg',
                'position' => 'teacher',
                'workingat' => 'UCSY',
                'bio' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum autem"
            ],
            [
                'name' => 'Taylor Launer',
                'email' => 'Launer@gmail.com',
                'image' => '4.jpg',
                'position' => 'teacher',
                'workingat' => 'UCSY',
                'bio' => "Lorem ipsum dolor sit amet consectetur adipisici"
            ],
        ];
        foreach($teachers as $teacher){
            Teacher::create($teacher);
        }
    }
}
