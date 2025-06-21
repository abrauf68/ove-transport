<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'For Individuals', 'slug' => Str::slug('For Individuals')],
            ['name' => 'For Businesses', 'slug' => Str::slug('For Businesses')],
        ];

        foreach ($categories as $category) {
            ServiceCategory::create($category);
        }
    }
}
