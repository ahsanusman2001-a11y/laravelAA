<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $courses = [
            [
                'name' => 'Basic Electrical Engineering',
                'code' => 'BEE-213',
                'credit_hours' => 4,



            ],

            [
                'name' => 'Computer Programming Fundamentals',
                'code' => 'CPF-213',
                'credit_hours' => 4,



            ],

            [
                'name' => 'English',
                'code' => 'CEE-213',
                'credit_hours' => 2,



            ],


            [
                'name' => 'Islamiat',
                'code' => 'CEI-213',
                'credit_hours' => 2,



            ],

            [
                'name' => 'Applied Physics',
                'code' => 'CEP-223',
                'credit_hours' => 4,



            ],

            [
                'name' => 'Cyber Security',
                'code' => 'CEB-225',
                'credit_hours' => 4,



            ],


            [
                'name' => 'Software Engineering',
                'code' => 'SEE-213',
                'credit_hours' => 4,



            ],


            [
                'name' => 'Microprocessor & Microcomputers',
                'code' => 'MPMC-223',
                'credit_hours' => 4,



            ],


            [
                'name' => 'Computer Graphics',
                'code' => 'CGMA-221',
                'credit_hours' => 4,



            ],

        ];

        foreach($courses as $course){
            Course::create($course);
        }
    }
}
