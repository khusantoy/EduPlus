<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            [
                'title'=>'Frontend',
                'description'=>'Frontend dasturlash boyicha kurs' ,
                'price'=>300
            ],
            [
                'title'=>'Backend',
                'description'=>'Backend dasturlash boyicha kurs' ,
                'price'=>500
            ],
            [
                'title'=>'English',
                'description'=>'Ingliz tili boyicha kurs' ,
                'price'=>200
            ],
            [
                'title'=>'Math',
                'description'=>'Matematika boyicha kurs' ,
                'price'=>200
            ]
        ]);
    }
}
