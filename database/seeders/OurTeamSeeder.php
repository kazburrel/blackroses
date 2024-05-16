<?php

namespace Database\Seeders;

use App\Models\OurTeam;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OurTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $text = 'Latoya Hughes, a distinguished Senior Social Worker, embodies a profound commitment to uplifting marginalized youth. With a rich background in local authority services, Latoya has honed her expertise in navigating the complexities of youth welfare, particularly in areas fraught with challenges like serious youth violence, child exploitation, and NEET circumstances. As the driving force behind Black Roses Support, Latoya channels her passion into a transformative vision: to provide a lifeline for young individuals grappling with adversity. Drawing from her frontline experiences, she understands the nuanced needs of the community and leverages this insight to tailor interventions that resonate deeply with those they serve. Under Latoya\'s leadership, Black Roses Support operates as more than just a service provider; it\'s a beacon of hope and empowerment. Through a holistic approach that integrates physical activities such as boxing and football with mentoring and skills training, Latoya fosters an environment where youth not only find refuge but also discover their innate potential to thrive. Central to Black Roses Support\'s ethos is the belief in the inherent worth of every individual. Latoya and her team go beyond surface-level interventions, delving into the root causes of societal issues and offering tailored support that addresses the multifaceted needs of their beneficiaries. With a steadfast commitment to social justice and community well-being, Latoya Hughes stands as a beacon of resilience and compassion in the field of social work. Through her unwavering dedication and innovative approaches, she continues to make a profound impact, one life at a time.';
        $uuid = Str::uuid();
        $creator = User::where('email', 'admin@blackrosessupport.co.uk')->first();
        OurTeam::create([
            'uuid' => $uuid,
            'creator' => $creator->uuid,
            'fullname' => 'Latoya hughes',
            'image' => 'images/resource/latoya_main.jpeg',
            'position' => 'Founder & CEO',
            'write_up' => $text,
        ]);
    }
}
