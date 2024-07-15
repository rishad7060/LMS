<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class Team extends Component
{
    public $team;

    public function __construct($team)
    {
        $this->team = $team;
    }

    public function render()
    {
        return view('components.front.team');
    }
}