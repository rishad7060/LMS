<?php

namespace Database\Seeders;

use App\Models\Session;
use App\Models\Term;
use Illuminate\Database\Seeder;

class SessionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sessions = [];

        // Session Set 1
        $sessions[] = Session::factory()->create([
            'title' => 'Session 1',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 2',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 3',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 4',
        ]);

        $this->attachSessionsToTerm(1, $sessions); // Attach to Term 1
        $sessions = [];

        // Session Set 2
        $sessions[] = Session::factory()->create([
            'title' => 'Session 5',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 6',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 7',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 8',
        ]);

        $this->attachSessionsToTerm(2, $sessions); // Attach to Term 2
        $sessions = [];

        // Session Set 3
        $sessions[] = Session::factory()->create([
            'title' => 'Session 9',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 10',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 11',
        ]);

        $sessions[] = Session::factory()->create([
            'title' => 'Session 12',
        ]);

        $this->attachSessionsToTerm(3, $sessions); // Attach to Term 3
        $sessions = [];
    }

    /**
     * Attach sessions to a specific term.
     *
     * @param int $termId
     * @param array $sessions
     * @return void
     */
    private function attachSessionsToTerm($termId, $sessions = [])
    {
        $term = Term::find($termId);

        if ($term) {
            foreach ($sessions as $session) {
                $term->Sessions()->attach($session->id, [
                    'order' => $term->Sessions()->max('order') + 1
                ]);
            }
        }
    }
}