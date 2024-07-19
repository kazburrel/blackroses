<?php

namespace App\Livewire\EditTeamMember;

use App\Models\OurTeam;
use App\SweetAlertToast;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTeamMember extends Component
{

    use SweetAlertToast, WithFileUploads;

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
            'image' => 'nullable|image|max:1024', // Ensure the image is valid and not larger than 1MB
            'position' => 'required|string|max:255',
            'write_up' => 'required|string',
        ]);

        $member = OurTeam::where('uuid', $this->memberId)->first();
        if ($member) {
            $member->fullname = $this->fullname;
            $member->position = $this->position;
            $member->write_up = $this->write_up;

            if ($this->image) {
                $imagePath = $this->image->store('team_images', 'public');
                $member->image = $imagePath;
            }

            $member->update([
                'fullname' => $this->fullname,
                'position' => $this->position,
                'write_up' => $this->write_up,
                'image' => isset($imagePath) ? $imagePath : $member->image,
            ]);

            $this->dispatch('memberUpdated', $member->uuid);
            $this->dispatchSuccessToast('Team member edited successfully!');
            return $this->js("$('#kt_modal_add_user-$this->memberId').modal('hide');");
        }
    }

    public function render()
    {
        return view('livewire.edit-team-member.edit-team-member');
    }
}
