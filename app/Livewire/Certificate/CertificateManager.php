<?php

namespace App\Livewire\Certificate;

use App\Models\Certificate;
use App\SweetAlertToast;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CertificateManager extends Component
{

    use SweetAlertToast;

    public $certificates;
    public $documentId;

    public function mount()
    {
        $this->certificates = Certificate::all();
    }

    public function deletCertificate($uuid)
    {
        $cert = Certificate::where('uuid', $uuid)->first();

        if ($cert) {
            $cert->delete();
            $this->certificates = Certificate::all();
            $this->dispatchSuccessToast('Certificate deleted successfully!');
        }
    }

    public function refreshMemberData($uuid)
    {

        Certificate::where('uuid', $uuid)->first();
    }
    public function openDocument($uuid)
    {
        $certificate = Certificate::where('uuid', $uuid)->first();
        if (!$certificate) {
            $this->dispatchErrorToast('Certificate not found!');
            return;
        }
        $filePath = $certificate->file;
        if (!Storage::disk('public')->exists($filePath)) {
            $this->dispatchErrorToast('Certificate not found!');
            return;
        }
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileName =  $certificate->name . '_certificate.' . $extension;
        $file = Storage::disk('public')->path($filePath);
        return response()->download($file, $fileName);
    }

    public function render()
    {
        return view('livewire.certificate.certificate-manager');
    }
}