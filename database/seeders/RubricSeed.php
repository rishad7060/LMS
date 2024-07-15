<?php

namespace Database\Seeders;

use App\Models\Rubric;
use App\Models\Session;
use Illuminate\Database\Seeder;

class RubricSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define rubric body excluding grammar or English-related items
        $body = [
            [
                "item_title" => "Technical Skills",
                "cells" => [
                    [
                        "title" => "Lacks basic technical knowledge and skills.",
                        "score" => 0,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Shows basic understanding but lacks depth.",
                        "score" => 1,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Demonstrates moderate technical skills with occasional errors.",
                        "score" => 2,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Consistently demonstrates advanced technical skills.",
                        "score" => "3",
                        "pass_score" => false
                    ],
                    [
                        "title" => "Exceeds expectations in technical proficiency and innovation.",
                        "score" => "4",
                        "pass_score" => false
                    ]
                ]
            ],
            [
                "item_title" => "Problem Solving",
                "cells" => [
                    [
                        "title" => "Struggles to identify or solve problems effectively.",
                        "score" => 0,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Identifies problems but struggles with solutions.",
                        "score" => 1,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Able to identify and attempt solutions but with limited success.",
                        "score" => 2,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Effectively identifies and solves problems most of the time.",
                        "score" => "3",
                        "pass_score" => false
                    ],
                    [
                        "title" => "Consistently excels in problem-solving with innovative solutions.",
                        "score" => "4",
                        "pass_score" => false
                    ]
                ]
            ],
            [
                "item_title" => "Analytical Thinking",
                "cells" => [
                    [
                        "title" => "Lacks analytical thinking skills.",
                        "score" => 0,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Shows basic analytical skills with occasional lapses.",
                        "score" => 1,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Demonstrates moderate analytical skills but lacks consistency.",
                        "score" => 2,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Consistently applies analytical thinking effectively.",
                        "score" => "3",
                        "pass_score" => false
                    ],
                    [
                        "title" => "Excels in analytical thinking with innovative approaches.",
                        "score" => "4",
                        "pass_score" => false
                    ]
                ]
            ],
            [
                "item_title" => "Coding Standards",
                "cells" => [
                    [
                        "title" => "Does not follow coding standards.",
                        "score" => 0,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Attempts to follow coding standards but often deviates.",
                        "score" => 1,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Generally follows coding standards with occasional deviations.",
                        "score" => 2,
                        "pass_score" => false
                    ],
                    [
                        "title" => "Consistently follows coding standards.",
                        "score" => "3",
                        "pass_score" => false
                    ],
                    [
                        "title" => "Adheres to coding standards with exemplary practices.",
                        "score" => "4",
                        "pass_score" => false
                    ]
                ]
            ]
        ];

        // Create a rubric instance
        $rubric = Rubric::factory()->create([
            'title' => 'Technical Skills Assessment Rubric',
            'description' => '0-Not able to perform, 1-Inadequate, 2-Needs improvement, 3-Meets expectation, 4-Exceeds expectation',
            'body' => json_encode($body)
        ]);

        // Attach rubric to specific sessions (example IDs used)
        $session_ids = [1, 5, 9];

        foreach ($session_ids as $session_id) {
            $this->addRubricToSession(Session::find($session_id), $rubric);
        }
    }

    /**
     * Attach rubric to a session.
     *
     * @param Session $session
     * @param Rubric $rubric
     * @return void
     */
    private function addRubricToSession(Session $session, Rubric $rubric)
    {
        $session->Rubrics()->attach(
            $rubric,
            ['order' => $session->Sessionable()->max('order') + 1]
        );
    }
}