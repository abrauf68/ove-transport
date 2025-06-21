<?php

namespace Database\Seeders;

use App\Models\ServiceSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            ['service_category_id' => 1, 'name' => 'We Offer', 'slug' => Str::slug('We Offer')],
            ['service_category_id' => 1, 'name' => 'We Serve', 'slug' => Str::slug('We Serve')],

            ['service_category_id' => 2, 'name' => 'Industries we serve', 'slug' => Str::slug('Industries we serve')],
            ['service_category_id' => 2, 'name' => 'Solutions & advantages', 'slug' => Str::slug('Solutions & advantages')],
            ['service_category_id' => 2, 'name' => 'Relocation services', 'slug' => Str::slug('Relocation services')],
        ];

        foreach ($subcategories as $category) {
            ServiceSubCategory::create($category);
        }
    }
}
