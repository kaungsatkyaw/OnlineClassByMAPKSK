<?php

use Illuminate\Database\Seeder;
use App\Course;

class courseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'title' => 'Certificate Course in Writing for a Global Market',
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
                'image' => '1.jpg',
                'category_id' => '1',
                'teacher_id' => '1',
                'range' => '09/30/2020 - 10/30/2020',
                'price' => '100',
            ],
            [
                'title' => 'Google AdWords: Get More Customers with Search Marketing',
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
                'image' => '2.jpg',
                'category_id' => '2',
                'teacher_id' => '2',
                'range' => '01/30/2021 - 4/30/2021',
                'price' => '150',
            ],
            [
                'title' => 'The Ultimate Drawing Course Beginner to Advanced',
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit",
                'image' => '3.jpg',
                'category_id' => '3',
                'teacher_id' => '3',
                'range' => '01/30/2021 - 4/30/2021',
                'price' => '180',
            ],
            [
                'title' => 'Ultimate MySQL Bootcamp: Go from SQL Beginner to Expert',
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
                'image' => '4.jpg',
                'category_id' => '4',
                'teacher_id' => '4',
                'range' => '01/30/2021 - 4/30/2021',
                'price' => '180',
            ],
            [
                'title' => 'Web Developer Bootcamp Make web applications',
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
                'image' => '5.jpg',
                'category_id' => '5',
                'teacher_id' => '2',
                'range' => '01/30/2021 - 4/30/2021',
                'price' => '250',
            ],
            [
                'title' => 'How to Start an Amazon FBA Store on a Tight Budget',
                'description' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
                'image' => '6.jpg',
                'category_id' => '1',
                'teacher_id' => '3',
                'range' => '01/30/2021 - 4/30/2021',
                'price' => '180',
            ],
        ];
        foreach($courses as $course){
            Course::create($course);
        }
    }
}
