<?php

namespace App\Livewire\Certificate;

use App\Models\Certificate;
use App\SweetAlertToast;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddCertificate extends Component
{
    use WithFileUploads, SweetAlertToast;

    public $certificates;

    public $uuid;
    public $creator;
    public $name;
    public $email;
    public $issued_date;
    public $expiry_date;
    public $file;
    public $status;
    public $days_until_notification;
    public $isVisible = false;


    public function toggleVisibility()
    {
        $this->isVisible = !$this->isVisible;
    }

    public function mount()
    {
        $this->certificates = Certificate::all();
    }

    public function addCertificate()
    {


        $this->formValidation();
        $uuid = Str::uuid();
        $filePath = $this->file->store('Certificates', 'public');
        $creator = Auth::user();
        $cert = Certificate::create([
            'uuid' => $uuid,
            'creator' => $creator->uuid,
            'name' => $this->name,
            'email' => $this->email,
            'issued_date' => $this->issued_date,
            'expiry_date' => $this->expiry_date,
            'file' => $filePath,
            'days_until_notification' => $this->days_until_notification,
        ]);
        $this->dispatchSuccessToast('Certificate added successfully!');
        $this->resetForm();
        $this->dispatch('certificateAdded', $cert->uuid);
        // $this->certificates = Certificate::all();
    }

    public function formValidation()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'issued_date' => 'required|date',
            'expiry_date' => 'required|date|after_or_equal:issued_date',
            'file' => 'required|mimes:png,jpg,jpeg,heic,pdf,docx,doc',
            'days_until_notification' => 'required'
        ]);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->issued_date = '';
        $this->expiry_date = '';
        $this->file = '';
        $this->days_until_notification = '';
    }
    public function render()
    {
        return view('livewire.certificate.add-certificate');
    }
}
