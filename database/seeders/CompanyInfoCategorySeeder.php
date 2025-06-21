<?php

namespace Database\Seeders;

use App\Models\CompanyInfoCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanyInfoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Our brand', 'slug' => Str::slug('Our brand')],
            ['name' => 'Leadership', 'slug' => Str::slug('Leadership')],
            ['name' => 'Learn More', 'slug' => Str::slug('Learn More')],
        ];

        foreach ($categories as $category) {
            CompanyInfoCategory::create($category);
        }
    }
}
