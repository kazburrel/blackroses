<?php

namespace App\Livewire\TeamMembers;

use App\Models\OurTeam;
use App\SweetAlertToast;
use Livewire\Component;

class TeamMembers extends Component
{
    use SweetAlertToast;

    public $teamMembers;
    protected $listeners = ['deleteMember'];


    public function mount()
    {
        $this->teamMembers = OurTeam::all();
    }

    public function deleteMember($uuid)
    {
        $member = OurTeam::where('uuid', $uuid)->first();

        if ($member) {
            $member->delete();
            $this->teamMembers = OurTeam::all();
            $this->dispatchSuccessToast('Team member deleted successfully!');
        }
    }

    public function render()
    {
        return view('livewire.team-members.team-members');
    }
}
