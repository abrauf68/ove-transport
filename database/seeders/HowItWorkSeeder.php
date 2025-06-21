<?php

namespace Database\Seeders;

use App\Models\HowItWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HowItWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $services = [
            [
                'name' => 'How to ship a car',
                'slug' => Str::slug('How to ship a car'),
                'meta_title' => 'Guide to auto transport',
                'meta_description' => 'Convenient car transport with pickup and drop-off at your door.',
                'details' => '<p>Safe and reliable door-to-door car shipping tailored to your location.</p>',
                'meta_image' => 'uploads/company/services/service1.jpg',
                'main_image' => 'uploads/company/services/service1.jpg',
            ],
            [
                'name' => 'Car shipping costs',
                'slug' => Str::slug('Car shipping costs'),
                'meta_title' => 'Calculate your estimate',
                'meta_description' => 'Understand car transport pricing and get a quick estimate.',
                'details' => '<p>Learn how car shipping prices are determined and how to calculate your cost.</p>',
                'meta_image' => 'uploads/company/services/service2.jpg',
                'main_image' => 'uploads/company/services/service2.jpg',
            ],
            [
                'name' => 'Cross country car shipping',
                'slug' => Str::slug('Cross country car shipping'),
                'meta_title' => 'Sea to shining sea',
                'meta_description' => 'Coast-to-coast car transport solutions across the USA.',
                'details' => '<p>Ship your car across the country with experienced transport carriers and smooth logistics.</p>',
                'meta_image' => 'uploads/company/services/service3.jpg',
                'main_image' => 'uploads/company/services/service3.jpg',
            ],
        ];

        foreach ($services as $service) {
            HowItWork::create($service);
        }
    }
}
