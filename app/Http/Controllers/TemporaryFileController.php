<?php

namespace App\Http\Controllers;

use App\Models\TemporaryMailFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TemporaryFileController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf,doc,docx|max:5000', // adjust mime types and max size as needed
        ]);

        if ($request->hasFile('file')) {
            try {
                $file = $request->file('file');
                $filename = time() . '-' . $file->getClientOriginalName();
                $filepath = $file->storeAs('temporary', $filename, 'public');
                $mimeType = $file->getClientMimeType();

                $temporaryFile = TemporaryMailFile::create([
                    'filename' => $filename,
                    'filepath' => $filepath,
                    'mime_type' => $mimeType,
                ]);

                return response()->json(['id' => $temporaryFile->id, 'filename' => $filename, 'filepath' => $filepath, 'mime_type' => $mimeType]);
            } catch (\Exception $e) {
                Log::error('File upload error: ' . $e->getMessage());
                return response()->json(['error' => 'File upload failed'], 500);
            }
        }

        Log::error('File upload failed: No file in request');
        return response()->json(['error' => 'File upload failed'], 500);
    }
}
