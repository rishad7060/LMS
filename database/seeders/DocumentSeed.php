<?php

namespace Database\Seeders;

use App\Models\File;
use App\Models\Session;
use Illuminate\Database\Seeder;

class DocumentSeed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        #Computer Science
        #1
        $file = \App\Models\File::factory()->create([
            'title' => 'Introduction to Programming',
            'description' => 'Programming Basics and Concepts',
            'file' => 'mp4/xKOV4ySeFiaZPLiDOHNgX7B8zd0zglaA59SLzCDG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(1, $file);

        
        #2
        $file =\App\Models\File::factory()->create([
            'title' => 'Data Structures and Algorithms',
            'description' => 'In-depth look at data structures and algorithms',
            'file' => 'mp4/qL6j3BRb8QzaE9eNU5oHLBI8jfZZlVcnvZnrXS3p.mp4',
            'file_size' => '39459508',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(2, $file);

        #3
        $file =\App\Models\File::factory()->create([
            'title' => 'Database Management Systems',
            'description' => 'Fundamentals of Database Systems',
            'file' => 'mp4/sonP7sjdDpbBx9AZP2KQaAl9YlolYo3JI6gOshBA.mp4',
            'file_size' => '6334218',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(3, $file);

        #4
        $file =\App\Models\File::factory()->create([
            'title' => 'Operating Systems',
            'description' => 'Introduction to Operating Systems',
            'file' => 'mp4/xKOV4ySeFiaZPLiDOHNgX7B8zd0zglaA59SLzCDG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(4, $file);


        #Business Administration
        #5
        $file =\App\Models\File::factory()->create([
            'title' => 'Principles of Management',
            'description' => 'Core principles of management',
            'file' => 'mp4/B9LiL7uwjnhgapUTIwLBjjlVbz9Xf3iTCrDMSnfp.mp4',
            'file_size' => '20175977',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(5, $file);

        #6
        $file =\App\Models\File::factory()->create([
            'title' => 'Marketing Fundamentals',
            'description' => 'Basics of Marketing',
            'file' => 'mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '16354492',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(6, $file);

        #7
        $file =\App\Models\File::factory()->create([
            'title' => 'Financial Accounting',
            'description' => 'Introduction to Financial Accounting',
            'file' => 'mp4/B9LiL7uwjnhgapUTIwLBjjlVbz9Xf3iTCrDMSnfp.mp4',
            'file_size' => '20175977',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(7, $file);

        #8
        $file =\App\Models\File::factory()->create([
            'title' => 'Organizational Behavior',
            'description' => 'Study of Organizational Behavior',
            'file' => 'mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '16354492',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(8, $file);


        #Engineering
        #9
        $file =\App\Models\File::factory()->create([
            'title' => 'Introduction to Engineering',
            'description' => 'Basics of Engineering',
            'file' => 'mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(9, $file);
        
        #10
        $file =\App\Models\File::factory()->create([
            'title' => 'Mechanics',
            'description' => 'Fundamentals of Mechanics',
            'file' => 'mp4/qL6j3BRb8QzaE9eNU5oHLBI8jfZZlVcnvZnrXS3p.mp4',
            'file_size' => '39459508',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(10, $file);

        #11
        $file =\App\Models\File::factory()->create([
            'title' => 'Thermodynamics',
            'description' => 'Introduction to Thermodynamics',
            'file' => 'mp4/KY2eNP2eaH1WQbmffUhexMs0gWP4W0FKSCa65JJG.mp4',
            'file_size' => '6334218',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(11, $file);

        #12
        $file =\App\Models\File::factory()->create([
            'title' => 'Electrical Engineering',
            'description' => 'Basics of Electrical Engineering',
            'file' => 'mp4/xKOV4ySeFiaZPLiDOHNgX7B8zd0zglaA59SLzCDG.mp4',
            'file_size' => '21811717',
            'file_type' => 'mp4'
        ]);
        $this->addFileToSession(12, $file);
        
    }

    public function addFileToSession($session, $file){
        $session = Session::findorfail($session);
        $session->Files()->attach(
            $file,
            ['order' => $session->Sessionable()->max('order') + 1]
        );
    }
}