<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(20)->create();
        // \App\Models\Category::factory(5)->create();

        Category::create([
            'name' => 'Doctor',
            'slug' => 'doctor',
        ]);

        Category::create([
            'name' => 'Patient',
            'slug' => 'patient',
        ]);

        Category::create([
            'name' => 'Nurse',
            'slug' => 'nurse',
        ]);

        Category::create([
            'name' => 'Hospital',
            'slug' => 'hospital',
        ]);

        Category::create([
            'name' => 'Laboratory',
            'slug' => 'laboratory',
        ]);

        Category::create([
            'name' => 'Pharmacy',
            'slug' => 'pharmacy',
        ]);

        Category::create([
            'name' => 'Clinic',
            'slug' => 'clinic',
        ]);

        Category::create([
            'name' => 'Health Insurance',
            'slug' => 'health-insurance',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
