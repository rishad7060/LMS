<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        #1
        \App\Models\Department::factory()->create([
            'title' => 'Computer Science',
        ]);

        #2
        \App\Models\Department::factory()->create([
            'title' => 'Business Administration',
        ]);

        #3
        \App\Models\Department::factory()->create([
            'title' => 'Engineering',
        ]);

        #4
        \App\Models\Department::factory()->create([
            'title' => 'Arts',
        ]);
    }
}