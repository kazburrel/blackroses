<?php

namespace App\Livewire\EditTeamMember;

use App\Models\OurTeam;
use App\SweetAlertToast;
use Illuminate\Support\Facades\Log;
use Livewire\Component;


class EditTeamMember extends Component
{

    use SweetAlertToast;

    public $memberId;
    public $fullname;
    public $image;
    public $position;
    public $write_up;
    public function mount($memberId)
    {
        $this->memberId = $memberId;
        $this->loadMember();
    }

    public function loadMember()
    {
        $member = OurTeam::where('uuid', $this->memberId)->first();
        if ($member) {
            $this->fullname = $member->fullname;
            $this->position = $member->position;
            $this->write_up = $member->write_up;
            $this->image = $member->image;
        }
    }

    public function editTeamMember()
    {
        $this->validate([
            'fullname' => 'required|string|max:255',
            'image' => 'nullable',
            'position' => 'required|string|max:255',
            'write_up' => 'required|string|max:1000',
        ]);

        $member = OurTeam::where('uuid', $this->memberId)->first();
        if ($member) {
            $member->fullname = $this->fullname;
            $member->position = $this->position;
            $member->write_up = $this->write_up;
            if ($this->image) {
                $member->image = $this->image;
            }

            $member->update([
                'fullname' => $this->fullname,
                'position' => $this->position,
                'write_up' => $this->write_up,
                'image' => isset($this->image) ? $this->image : $member->image,
            ]);
            $this->dispatch('memberUpdated', $member->uuid);
            $this->dispatchSuccessToast('Team member edited successfully!');
            // return redirect()->route('get.brs.team');
        }
    }

    public function render()
    {
        return view('livewire.edit-team-member.edit-team-member');
    }
}
