<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Computer Science department
        \App\Models\Course::factory()->create([
            'title' => 'Introduction to Computer Science',
            'department_id' => 1
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Data Structures and Algorithms',
            'department_id' => 1
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Database Management Systems',
            'department_id' => 1
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Operating Systems',
            'department_id' => 1
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Software Engineering',
            'department_id' => 1
        ]);


        // Business Administration department
        \App\Models\Course::factory()->create([
            'title' => 'Introduction to Business',
            'department_id' => 2
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Financial Accounting',
            'department_id' => 2
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Marketing Principles',
            'department_id' => 2
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Human Resource Management',
            'department_id' => 2
        ]);


        // Engineering department
        \App\Models\Course::factory()->create([
            'title' => 'Introduction to Engineering',
            'department_id' => 3
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Engineering Mechanics',
            'department_id' => 3
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Thermodynamics',
            'department_id' => 3
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Fluid Mechanics',
            'department_id' => 3
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Materials Science',
            'department_id' => 3
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Control Systems',
            'department_id' => 3
        ]);


        // Arts department
        \App\Models\Course::factory()->create([
            'title' => 'Introduction to Art History',
            'department_id' => 4
        ]);

        \App\Models\Course::factory()->create([
            'title' => 'Modern Art',
            'department_id' => 4
        ]);
    }
}