<?php

namespace App\Livewire\TeamMembers;

use App\Models\OurTeam;
use Livewire\Component;

class TeamMembers extends Component
{
    public $teamMembers;

    public function mount()
    {
        $this->teamMembers = OurTeam::all();
    }

    public function render()
    {
        return view('livewire.team-members.team-members');
    }
}
