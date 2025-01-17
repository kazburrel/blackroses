<?php

namespace App\Livewire\MailTeam;

use App\Models\User;
use Livewire\Component;
use Utyemma\LaraNotice\Notify;

class SendStaffMails extends Component
{
    public $staffUsers;
    public $to;
    public $cc;
    public $bcc;
    public $subject;
    public $body;

    public function mount($staffUsers)
    {
        $this->staffUsers = $staffUsers;
    }

    public function sendMail()
    {
        $data = [
            'to' => $this->to,
            'cc' => $this->cc,
            'bcc' => $this->bcc,
            'subject' => $this->subject,
            'body' => $this->body,
        ];
        dd($data);
        foreach ($this->staffUsers as $value) {
            (new Notify())
                ->subject($data['subject'])
                ->cc(explode(',', $data['cc']))
                ->bcc(explode(',', $data['bcc']))
                ->line($data['body'], 'text/html')
                ->mail($value);
        }

        $this->reset(['to', 'cc', 'bcc', 'subject', 'body']);
    }

    public function render()
    {
        $staffUsers = User::all()->map(function ($user) {
            return [
                'id' => $user->uuid,
                'fname' => $user->name,
                'avatar' => $user->avatar,
                'email' => $user->email,
            ];
        });

        return view('livewire.mail-team.send-staff-mails', [
            'staffUsers' => $staffUsers
        ]);
    }
}
