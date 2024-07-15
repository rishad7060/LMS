<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Term;

class TermSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  department && Starter Course
        # 1
        \App\Models\Term::factory()->create([
            'title' => 'Introduction',
            'department_id' => 1,
            'course_id' => 1
        ]);

        # 2
        \App\Models\Term::factory()->create([
            'title' => 'Advance',
            'department_id' => 1,
            'course_id' => 1
        ]);

        //  department && PreIntermediate Course
        # 3
        \App\Models\Term::factory()->create([
            'title' => 'Assesment',
            'department_id' => 1,
            'course_id' => 3
        ]);

        # 4
        \App\Models\Term::factory()->create([
            'title' => 'Mock Exams',
            'department_id' => 1,
            'course_id' => 3
        ]);

        //  department && Intermediate Course
        # 5
        \App\Models\Term::factory()->create([
            'title' => 'Introduction and Advance',
            'department_id' => 1,
            'course_id' => 4
        ]);

        # 6
        \App\Models\Term::factory()->create([
            'title' => 'Assesment',
            'department_id' => 1,
            'course_id' => 4
        ]);

        //  department && Advanced Course
        # 7
        \App\Models\Term::factory()->create([
            'title' => 'Introduction and Advance',
            'department_id' => 1,
            'course_id' => 5
        ]);

        # 8
        \App\Models\Term::factory()->create([
            'title' => 'Assesment',
            'department_id' => 1,
            'course_id' => 5
        ]);
    }
}