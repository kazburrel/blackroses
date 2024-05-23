<?php

namespace App\Livewire\Vacancy;

use App\Models\JobVacancy;
use App\SweetAlertToast;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;


class PostJobVacancy extends Component
{
    use SweetAlertToast;
    public $current_step = 1;
    public $total_step = 3;
    public $title;
    public $type = [];
    public $due_date;
    public $schedule = [];
    public $benefits;
    public $postcode;
    public $location;
    public $pay_rate;
    public $contact;
    public $salary;
    public $description = 'Please visit the application page to view the complete description';
    public $responsibility = 'Please visit the application page to view the complete responsibilities.';
    public $requirement = 'Please visit the application page to view the complete requirements.';


    public function decreaseStep()
    {
        if ($this->current_step > 1) {
            $this->current_step--;
        }
    }
    public function increaseStep()
    {
        $this->formValidation();
        if ($this->current_step < $this->total_step) {
            $this->current_step++;
        }
    }
    public function submit()
    {
        $user = Auth::user();
        $uuid = Str::uuid();
        JobVacancy::create([
            'uuid' => $uuid,
            'creator_id' => $user->uuid,
            'title' => $this->title,
            'type' => $this->type,
            'due_date' => $this->due_date,
            'schedule' => $this->schedule,
            'benefits' => $this->benefits,
            'postcode' => $this->postcode,
            'location' => $this->location,
            'pay_rate' => $this->pay_rate,
            'contact' => $this->contact,
            'salary' => $this->salary,
            'description' => "Please visit the application page to view the complete description",
            'requirement' => "Please visit the application page to view the complete requirement",
            'responsibility' => "Please visit the application page to view the complete responsibility",
        ]);
        $this->reset();
        $this->dispatchSuccessToast('Job advert posted successfully!');
    }

    public function formValidation()
    {
        if ($this->current_step == 1) {
            $validated = $this->validate([
                'title' => 'required',
                'type' => 'required',
                'due_date' => 'required',
                'schedule' => 'required',
                'benefits' => 'nullable'
            ]);
            // dd($validated);
        }
        if ($this->current_step == 2) {
            $validated = $this->validate([
                'location' => 'required',
                'pay_rate' => 'required',
                'postcode' => 'nullable',
                'contact' => 'required',
                'salary' => 'nullable',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.vacancy.post-job-vacancy');
    }
}
