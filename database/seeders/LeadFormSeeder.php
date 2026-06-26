<?php

namespace Database\Seeders;

use App\Models\LeadIndustry;
use App\Models\LeadRating;
use App\Models\LeadSource;
use Illuminate\Database\Seeder;

class LeadFormSeeder extends Seeder
{
    public function run(): void
    {
        // Seeded from previously hardcoded values in add-clients form
        $industries = [
            'IT Company',
            'Sales & Marketing',
            'Digital Marketing',
            'Finance Support',
        ];

        foreach ($industries as $name) {
            LeadIndustry::firstOrCreate(['name' => $name]);
        }

        $ratings = [
            'None',
            'High',
            'Medium',
            'Low',
        ];

        foreach ($ratings as $name) {
            LeadRating::firstOrCreate(['name' => $name]);
        }

        $sources = [
            'Advertisement',
            'Social Media',
            'Google Ads',
        ];

        foreach ($sources as $name) {
            LeadSource::firstOrCreate(['name' => $name]);
        }
    }
}
