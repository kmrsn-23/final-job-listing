<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ListJobs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ListJobs::factory()->count(510)->create();
    }
}