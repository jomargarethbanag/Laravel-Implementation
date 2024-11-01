<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resume;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resume::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            // Add other fields
        ]);
    }
}