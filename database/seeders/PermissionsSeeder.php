<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $models = [
            'department', 'course', 'session', 'term', 'file',
            'document', 'quiz', 'question', 'rubric', 'feedback',
            'participant', 'myCourse', 'plan', 'user'
        ];

        foreach ($models as $model) {
            // create permissions
            Permission::create(['name' => $model . '.index']);
            Permission::create(['name' => $model . '.create']);
            Permission::create(['name' => $model . '.edit']);
            Permission::create(['name' => $model . '.delete']);
            Permission::create(['name' => $model . '.show']);
        }

        Permission::create(['name' => 'document.order']);
        Permission::create(['name' => 'menu.education']);
        Permission::create(['name' => 'menu.toolbox']);
        Permission::create(['name' => 'mentor.list']);
        
        $role1 = Role::create(['name' => 'Super-Admin']);

        // create role and assign permission to supervisor
        $role2 = Role::create(['name' => 'supervisor']);
        foreach ($models as $model) {
            $role2->givePermissionTo($model . '.index');
            $role2->givePermissionTo($model . '.create');
            $role2->givePermissionTo($model . '.edit');
            $role2->givePermissionTo($model . '.show');
        }
        $role2->givePermissionTo('document.order');
        $role2->givePermissionTo('menu.education');
        $role2->givePermissionTo('menu.toolbox');
        $role2->givePermissionTo('mentor.list');

        // create roles and assign existing permissions to mentors
        $role3 = Role::create(['name' => 'mentor']);
        foreach ($models as $model) {
            $role3->givePermissionTo($model . '.index');
            $role3->givePermissionTo($model . '.show');
        }
        $role3->givePermissionTo('menu.education');
        $role3->givePermissionTo('mentor.list');
        
        // create roles and assign existing permissions
        $role4 = Role::create(['name' => 'student']);
        $role4->givePermissionTo('myCourse.index');

        // create users
        // participants
        // create demo users

        // Super Admin
        $admin = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
        ]);
        $admin->assignRole($role1);

        /*
        * Supervisor Users
        */

        // Supervisor Computer Science
        $supervisorCS = \App\Models\User::factory()->create([
            'name' => 'Supervisor CS',
            'email' => 'supervisor_cs@university.com',
        ]);
        $supervisorCS->assignRole($role2);

        // Supervisor Business Administration
        $supervisorBA = \App\Models\User::factory()->create([
            'name' => 'Supervisor BA',
            'email' => 'supervisor_ba@university.com',
        ]);
        $supervisorBA->assignRole($role2);

        // Supervisor Engineering
        $supervisorEng = \App\Models\User::factory()->create([
            'name' => 'Supervisor Eng',
            'email' => 'supervisor_eng@university.com',
        ]);
        $supervisorEng->assignRole($role2);

        /*
        * Mentor Users
        */

        // Mentor Computer Science
        $mentorCS = \App\Models\User::factory()->create([
            'name' => 'Mentor CS',
            'email' => 'mentor_cs@university.com',
        ]);
        $mentorCS->assignRole($role3);

        // Mentor Business Administration
        $mentorBA = \App\Models\User::factory()->create([
            'name' => 'Mentor BA',
            'email' => 'mentor_ba@university.com',
        ]);
        $mentorBA->assignRole($role3);

        // Mentor Engineering
        $mentorEng = \App\Models\User::factory()->create([
            'name' => 'Mentor Eng',
            'email' => 'mentor_eng@university.com',
        ]);
        $mentorEng->assignRole($role3);

        /*
        * Student Users
        */

        // Student Computer Science
        $studentCS = \App\Models\User::factory()->create([
            'name' => 'Student CS',
            'email' => 'student_cs@university.com',
        ]);
        $studentCS->assignRole($role4);

        // Student Business Administration
        $studentBA = \App\Models\User::factory()->create([
            'name' => 'Student BA',
            'email' => 'student_ba@university.com',
        ]);
        $studentBA->assignRole($role4);

        // Student Engineering
        $studentEng = \App\Models\User::factory()->create([
            'name' => 'Student Eng',
            'email' => 'student_eng@university.com',
        ]);
        $studentEng->assignRole($role4);
    }
}