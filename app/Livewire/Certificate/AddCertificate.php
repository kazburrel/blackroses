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
    public $issued_date;
    public $expiry_date;
    public $file;
    public $status;
    public $last_renewed_date;
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
        Certificate::create([
            'uuid' => $uuid,
            'creator' => $creator->uuid,
            'name' => $this->name,
            'issued_date' => $this->issued_date,
            'expiry_date' => $this->expiry_date,
            'file' => $filePath,
            'last_renewed_date' => $this->last_renewed_date,
        ]);
        $this->dispatchSuccessToast('Certificate added successfully!');
        $this->resetForm();
        $this->certificates = Certificate::all();
    }

    public function formValidation()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'issued_date' => 'required|date',
            'expiry_date' => 'required|date|after_or_equal:issued_date',
            'file' => 'required|mimes:png,jpg,jpeg,heic,pdf,docx,doc',
            'last_renewed_date' => 'nullable|date|after_or_equal:issued_date'
        ]);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->issued_date = '';
        $this->expiry_date = '';
        $this->file = '';
        $this->last_renewed_date = '';
    }
    public function render()
    {
        return view('livewire.certificate.add-certificate');
    }
}