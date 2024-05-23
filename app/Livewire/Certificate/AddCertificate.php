<?php

namespace App\Livewire\Certificate;

use App\Models\Certificate;
use Livewire\Component;
use Illuminate\Support\Str;

class AddCertificate extends Component
{

    public $certificates;
    public $uuid;
    public $creator;
    public $name;
    public $issued_date;
    public $expiry_date;
    public $file;
    public $status;
    public $last_renewed_date;

    public function mount()
    {
        $this->certificates = Certificate::all();
    }

    public function addCertificate()
    {
        $uuid = Str::uuid();
        Certificate::create([
            'name' => $this->name,
            'issued_date' => $this->issued_date,
            'expiry_date' => $this->expiry_date,
        ]);

        $this->resetForm();
        $this->certificates = Certificate::all();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->issued_date = '';
        $this->expiry_date = '';
    }
    public function render()
    {
        return view('livewire.certificate.add-certificate');
    }
}
