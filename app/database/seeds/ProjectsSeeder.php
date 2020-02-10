<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Ixpress Logistics',
            'subtitle' => 'A fast-growing pickup and delivery service in Singapore',
            'description' => 
                "Ixpress Logistics was looking for a way to integrate their external job tracking service with their own application. They needed a customer portal, a driver dashboard, a management interface.\n\nOne important solution they were looking for was the ability to reliably validate any Singapore address or postal code and if possible, resolve the address to even the building name -- and do it without using costly third-party validation services.\n\nThe solution I provided to them was based on Laravel, Vue.js and Docker. It included multiple API integrations with Stripe, Google Places API, Mabpox Geocoding and a custom-built database for address resolution.",
            'urls' => '[\'https://dashboard.ixpress647.com\',\'https://drivers.ixpress647.com\']',
            'commit_count' => 1356,
            'tags' => ['API Integration', 'GIS', 'Docker Engine', 'Tookan', 'Stripe'],
        ]);
    }
}
