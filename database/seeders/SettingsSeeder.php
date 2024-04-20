<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = Str::uuid();
        Settings::create([
            'uuid' => $uuid,
            'address' => '69 Granville Avenue Slough',
            'postcode' => 'SL21JR',
            'phone' => '07590333039',
            'email' => 'info@blackrosessupport.co.uk',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
            'linkedln' => '#',
        ]);
    }
}
