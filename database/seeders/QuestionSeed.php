<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuestionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questionsData = [
            // English Grammar Questions
            [
                'title' => 'Question #1',
                'question_body' => 'Would you mind ______ the window?',
                'question_type_id' => '1',
                'answers' => ["closing", "close", "to close", "closed"],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #2',
                'question_body' => 'I come ______ England',
                'question_type_id' => '1',
                'answers' => ["from", "at", "to", "beyond"],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #3',
                'question_body' => 'Can you tell me when ______ ?',
                'question_type_id' => '1',
                'answers' => ["the train leaves", "does the train leave", "leaves the train", "does leave the train"],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #4',
                'question_body' => 'When Simon ______ back tonight, he\'ll cook dinner.',
                'question_type_id' => '1',
                'answers' => ["comes", "will come", "come", "shall come"],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #5',
                'question_body' => 'We would never have had the accident if you ______ so fast.',
                'question_type_id' => '1',
                'answers' => ["wouldn't been driving", "hadn't been driving", "had driven", "wouldn't drive"],
                'correctAnswer' => "1"
            ],

            // IT Questions
            [
                'title' => 'Question #6',
                'question_body' => 'What does HTML stand for?',
                'question_type_id' => '1',
                'answers' => [
                    "Hyper Text Markup Language",
                    "Hyperlinks and Text Markup Language",
                    "Home Tool Markup Language",
                    "Hyperlinking Text Markup Language"
                ],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #7',
                'question_body' => 'What is the main function of a DNS server?',
                'question_type_id' => '1',
                'answers' => [
                    "To store website data",
                    "To translate domain names to IP addresses",
                    "To manage network security",
                    "To provide internet connection"
                ],
                'correctAnswer' => "1"
            ],
            [
                'title' => 'Question #8',
                'question_body' => 'Which of the following is not a programming language?',
                'question_type_id' => '1',
                'answers' => ["Python", "Java", "HTML", "C++"],
                'correctAnswer' => "2"
            ],
            [
                'title' => 'Question #9',
                'question_body' => 'What does CSS stand for?',
                'question_type_id' => '1',
                'answers' => [
                    "Cascading Style Sheets",
                    "Creative Style System",
                    "Computer Style Sheets",
                    "Colorful Style Sheets"
                ],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #10',
                'question_body' => 'What is the primary purpose of an operating system?',
                'question_type_id' => '1',
                'answers' => [
                    "To manage computer hardware and software resources",
                    "To provide a platform for software developers",
                    "To enable network communication",
                    "To protect against malware"
                ],
                'correctAnswer' => "0"
            ],

            // True/False Questions
            [
                'title' => 'Question #11',
                'question_body' => 'A RIVER is bigger than a STREAM.',
                'question_type_id' => '2',
                'answers' => ["true", "false"],
                'correctAnswer' => "0"
            ],
            [
                'title' => 'Question #12',
                'question_body' => 'There are one thousand years in a CENTURY.',
                'question_type_id' => '2',
                'answers' => ["true", "false"],
                'correctAnswer' => "1"
            ],
            [
                'title' => 'Question #13',
                'question_body' => 'SCARLET is a brilliant red colour.',
                'question_type_id' => '2',
                'answers' => ["true", "false"],
                'correctAnswer' => "0"
            ],

            // Short Answer Questions
            [
                'title' => 'Question #14',
                'question_body' => 'Does Linda read books?',
                'question_type_id' => '6',
                'answers' => ["Yes, Linda does read books."],
                'correctAnswer' => []
            ],
            [
                'title' => 'Question #15',
                'question_body' => 'Has she got a brother?',
                'question_type_id' => '6',
                'answers' => ["No, she hasn't"],
                'correctAnswer' => []
            ],
            [
                'title' => 'Question #16',
                'question_body' => 'Is this your pencil?',
                'question_type_id' => '6',
                'answers' => ["Yes, it is"],
                'correctAnswer' => []
            ],

            // Multiple Answer Question
            [
                'title' => 'Question #17',
                'question_body' => 'Which of the following are programming languages?',
                'question_type_id' => '3',
                'answers' => ["Python", "HTML", "JavaScript", "CSS"],
                'correctAnswer' => ["Python", "JavaScript"]
            ],

            // Essay Question
            [
                'title' => 'Question #18',
                'question_body' => 'Describe your experience with programming.',
                'question_type_id' => '4',
                'answers' => ["min" => 0, "max" => 500],
                'correctAnswer' => []
            ],

            // File Upload Question
            [
                'title' => 'Question #19',
                'question_body' => 'Upload a document describing a recent project you worked on.',
                'question_type_id' => '5',
                'answers' => ["max_size" => 1024, "min_size" => 128, "file_type" => "pdf"],
                'correctAnswer' => []
            ],

            // Matching Question
            [
                'title' => 'Question #20',
                'question_body' => 'Match the programming languages with their creators.',
                'question_type_id' => '7',
                'answers' => [
                    ["left" => "Python", "right" => "Guido van Rossum"],
                    ["left" => "Java", "right" => "James Gosling"],
                    ["left" => "C++", "right" => "Bjarne Stroustrup"],
                    ["left" => "JavaScript", "right" => "Brendan Eich"]
                ],
                'correctAnswer' => []
            ],

            // Audio Recording Question
            [
                'title' => 'Question #21',
                'question_body' => 'Record a short audio introducing yourself.',
                'question_type_id' => '8',
                'answers' => ["min_second" => 30, "max_second" => 120],
                'correctAnswer' => []
            ],
        ];

        foreach ($questionsData as $index => $questionData) {
            \App\Models\Question::factory()->create([
                'title' => $questionData['title'],
                'question_body' => $questionData['question_body'],
                'question_type_id' => $questionData['question_type_id'],
                'answer' => json_encode([
                    "answers" => $questionData['answers'],
                    "correctAnswer" => $questionData['correctAnswer']
                ])
            ]);
        }

        $quizzes = Quiz::all();
        $questionCount = count($questionsData);
        $questionIndex = 0;

        foreach ($quizzes as $quiz) {
            for ($i = 0; $i < 3; $i++) {
                $quiz->questions()->attach(
                    Question::where('title', $questionsData[$questionIndex]['title'])->first(),
                    ['order' => $quiz->questions()->max('order') + 1]
                );
                $questionIndex = ($questionIndex + 1) % $questionCount;
            }
        }
    }
}