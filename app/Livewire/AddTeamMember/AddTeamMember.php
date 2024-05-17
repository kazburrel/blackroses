<?php

namespace App\Livewire\AddTeamMember;

use App\Models\OurTeam;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

use Illuminate\Support\Str;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddTeamMember extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $fullname = '';

    public $image;

    #[Validate('required')]
    public $position = '';

    #[Validate('required')]
    public $write_up = '';

    public function addTeamMember()
    {

        $this->validate(['image' => 'required|image|mimes:png,jpg,jpeg,heic']);
        $creator = Auth::user();
        $filePath = $this->image->store('TeamImages', 'public');
        $uuid = Str::uuid();

        OurTeam::create([
            'uuid' => $uuid,
            'creator' => $creator->uuid,
            'fullname' => $this->fullname,
            'image' => $filePath,
            'position' => $this->position,
            'write_up' => $this->write_up,
        ]);
        $this->dispatch('toastr:success', ['message' => 'Team member created successfully']);
        $this->reset([
            'fullname',
            'image',
            'position',
            'write_up',
        ]);
    }

    public function render()
    {
        return view('livewire.add-team-member.add-team-member');
    }
}
