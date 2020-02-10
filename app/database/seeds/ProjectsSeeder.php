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
            'urls' => ['https://dashboard.ixpress647.com','https://drivers.ixpress647.com'],
            'image_urls' => ['/images/projects/ixpress01.jpg', '/images/projects/ixpress02.jpg', '/images/projects/ixpress03.jpg'],
            'commit_count' => 1356,
            'tags' => ['API Integration', 'GIS', 'Docker Engine', 'Tookan', 'Stripe'],
        ]);

        Project::create([
            'name' => 'Beth Equisolutions',
            'subtitle' => 'Farm produce supplier in Arusha, Tanzania',
            'description' => "Beth Equisolutions needed a web-based system to keep track of their growing network of contract farms. They were looking to keep track of harvest and transport costs as well as be able to keep up-to-date on upcoming harvest dates. Additionally, company employees would need to keep a running log of each and every farm — keeping tabs on weeding, fertilizer and spraying activities.\n\nI provided them with a system based on Laravel, Vue.js, Tailwind CSS and Docker that fulfilled all of the above requirements. Additionally, I built their landing page based on a design that the company provided.\n\nThis project is still in its infancy but with lots of potential to expand and mature.",
            'urls' => ['https://beth-equisolutions.com'],
            // 'image_urls' => ['/images/projects/beth01.jpg', '/images/projects/beth02.jpg', '/images/projects/beth03.jpg'],
            'image_urls' => [],
            'commit_count' => 184,
            'tags' => ['Data Processing', 'Docker Engine', 'Frontend UI'],
        ]);
    }
}
