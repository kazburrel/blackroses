<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComposeMail;
use App\Models\TemporaryMailFile;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class SendMailController extends Controller
{
    public function mailTeamMemberPost(Request $request)
    {
        // Parse the JSON strings into arrays
        $to = json_decode($request->input('compose_to'), true);
        $cc = json_decode($request->input('compose_cc'), true);
        $bcc = json_decode($request->input('compose_bcc'), true);

        $toUuids = is_array($to) ? array_column($to, 'value') : (isset($to['value']) ? [$to['value']] : []);
        $ccUuids = is_array($cc) ? array_column($cc, 'value') : (isset($cc['value']) ? [$cc['value']] : []);
        $bccUuids = is_array($bcc) ? array_column($bcc, 'value') : (isset($bcc['value']) ? [$bcc['value']] : []);

        $toUsers = User::whereIn('uuid', $toUuids)->get();
        $ccUsers = User::whereIn('uuid', $ccUuids)->get();
        $bccUsers = User::whereIn('uuid', $bccUuids)->get();

        // Prepare the email data
        $subject = $request->input('compose_subject');
        $body = $request->input('body');

        // Handle attachments
        $attachments = $request->input('attachment_ids', []);
        $files = TemporaryMailFile::whereIn('id', $attachments)->get();
        $filePaths = $files->pluck('filepath')->toArray();

        // Create the mail instance
        $mail = new ComposeMail($subject, $body, $filePaths);

        // Send the email to all recipients
        foreach ($toUsers as $toEmail) {
            $mail = new ComposeMail($subject, $body, $filePaths, $ccUsers, $bccUsers);
            Mail::to($toEmail)
                ->send($mail);
        }

        // Delete temporary files after sending
        foreach ($files as $file) {
            Storage::delete($file->filepath);
            $file->delete();
        }

        toast('Email sent successfully', 'success');
        return redirect()->back();
    }
}
