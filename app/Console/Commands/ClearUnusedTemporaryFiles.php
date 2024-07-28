<?php

namespace App\Console\Commands;

use App\Models\TemporaryMailFile;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ClearUnusedTemporaryFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'files:clear-unused';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear unused temporary files older than 6 hours';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $files = TemporaryMailFile::where('created_at', '<', Carbon::now()->subHours(6))->get();

        foreach ($files as $file) {
            // Delete file from storage
            try {
                // Double-check if the file exists in storage
                if (Storage::disk('public')->exists($file->filepath)) {
                    // Attempt to delete the file from storage
                    Storage::disk('public')->delete($file->filepath);
                } else {
                    Log::warning('File not found in storage: ' . $file->filepath);
                }

                // Log the deletion of the file
                Log::info('Deleting file: ' . $file->filepath);

                // Delete the record from the database
                $file->delete();
            } catch (\Exception $e) {
                // Log any errors encountered during the deletion process
                Log::error('Error deleting file: ' . $file->filepath . ' - ' . $e->getMessage());
            }
        }

        $this->info('Unused temporary files cleared successfully.');

        return 0;
    }
}
