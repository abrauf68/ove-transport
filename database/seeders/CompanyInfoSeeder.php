<?php

namespace Database\Seeders;

use App\Models\CompanyInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $infos = [
            // OUR BRAND (company_info_category_id = 1)
            [
                'company_info_category_id' => 1,
                'name' => 'Who we are',
                'slug' => Str::slug('Who we are'),
                'meta_title' => 'Our story and experience',
                'meta_description' => 'Learn about our journey, values, and accomplishments.',
                'details' => '<p>Discover the story behind our brand and what sets us apart.</p>',
                'meta_image' => 'uploads/company/services/service1.jpg',
                'main_image' => 'uploads/company/services/service1.jpg',
            ],
            [
                'company_info_category_id' => 1,
                'name' => 'Vision and mission',
                'slug' => Str::slug('Vision and mission'),
                'meta_title' => 'What we believe in',
                'meta_description' => 'Our goals and guiding principles.',
                'details' => '<p>We are driven by a clear mission and a bold vision for the future.</p>',
                'meta_image' => 'uploads/company/services/service2.jpg',
                'main_image' => 'uploads/company/services/service2.jpg',
            ],
            [
                'company_info_category_id' => 1,
                'name' => 'Our reputation',
                'slug' => Str::slug('Our reputation'),
                'meta_title' => 'Industry knowledge and expertise',
                'meta_description' => 'We are known for our excellence in car shipping.',
                'details' => '<p>Our reputation is built on trust, results, and years of experience.</p>',
                'meta_image' => 'uploads/company/services/service3.jpg',
                'main_image' => 'uploads/company/services/service3.jpg',
            ],
            [
                'company_info_category_id' => 1,
                'name' => 'Reviews',
                'slug' => Str::slug('Reviews'),
                'meta_title' => 'Feedback from our clients',
                'meta_description' => 'Hear directly from our satisfied customers.',
                'details' => '<p>Read testimonials from people who shipped their vehicles with us.</p>',
                'meta_image' => 'uploads/company/services/service4.jpg',
                'main_image' => 'uploads/company/services/service4.jpg',
            ],
            [
                'company_info_category_id' => 1,
                'name' => 'Press',
                'slug' => Str::slug('Press'),
                'meta_title' => 'See what people are saying',
                'meta_description' => 'Media and news mentions about our company.',
                'details' => '<p>See how we’re making waves in the auto transport industry.</p>',
                'meta_image' => 'uploads/company/services/service5.jpg',
                'main_image' => 'uploads/company/services/service5.jpg',
            ],

            // LEADERSHIP (company_info_category_id = 2)
            [
                'company_info_category_id' => 2,
                'name' => 'Executive team',
                'slug' => Str::slug('Executive team'),
                'meta_title' => 'Strategic leadership',
                'meta_description' => 'Meet the people leading our company.',
                'details' => '<p>Our executive team combines experience and vision to drive success.</p>',
                'meta_image' => 'uploads/company/services/service6.jpg',
                'main_image' => 'uploads/company/services/service6.jpg',
            ],
            [
                'company_info_category_id' => 2,
                'name' => 'Board of directors',
                'slug' => Str::slug('Board of directors'),
                'meta_title' => 'Organizational guidance',
                'meta_description' => 'Steering the company with integrity.',
                'details' => '<p>Our board provides expert oversight and direction.</p>',
                'meta_image' => 'uploads/company/services/service7.jpg',
                'main_image' => 'uploads/company/services/service7.jpg',
            ],

            // LEARN MORE (company_info_category_id = 3)
            [
                'company_info_category_id' => 3,
                'name' => 'Carrier relations',
                'slug' => Str::slug('Carrier relations'),
                'meta_title' => 'Join our carrier network',
                'meta_description' => 'Partner with us to deliver exceptional service.',
                'details' => '<p>Work with us as a carrier and be part of our trusted network.</p>',
                'meta_image' => 'uploads/company/services/service8.jpg',
                'main_image' => 'uploads/company/services/service8.jpg',
            ],
            [
                'company_info_category_id' => 3,
                'name' => 'Contact us',
                'slug' => Str::slug('Contact us'),
                'meta_title' => 'Support and information',
                'meta_description' => 'Reach out for help or information.',
                'details' => '<p>Need assistance? We’re here to help with anything you need.</p>',
                'meta_image' => 'uploads/company/services/service9.jpg',
                'main_image' => 'uploads/company/services/service9.jpg',
            ],
            [
                'company_info_category_id' => 3,
                'name' => 'Resources',
                'slug' => Str::slug('Resources'),
                'meta_title' => 'Guides and solutions',
                'meta_description' => 'Helpful information for your shipping needs.',
                'details' => '<p>Explore our library of articles, tools, and resources.</p>',
                'meta_image' => 'uploads/company/services/service10.jpg',
                'main_image' => 'uploads/company/services/service10.jpg',
            ],
            [
                'company_info_category_id' => 3,
                'name' => 'Help center',
                'slug' => Str::slug('Help center'),
                'meta_title' => 'Questions and answers',
                'meta_description' => 'Find answers to frequently asked questions.',
                'details' => '<p>Your go-to place for common questions and quick answers.</p>',
                'meta_image' => 'uploads/company/services/service11.jpg',
                'main_image' => 'uploads/company/services/service11.jpg',
            ],
            [
                'company_info_category_id' => 3,
                'name' => 'Blog',
                'slug' => Str::slug('Blog'),
                'meta_title' => 'Auto news and insights',
                'meta_description' => 'Stay updated with trends and tips.',
                'details' => '<p>Read our blog for the latest industry updates and expert tips.</p>',
                'meta_image' => 'uploads/company/services/service12.jpg',
                'main_image' => 'uploads/company/services/service12.jpg',
            ],
        ];

        foreach ($infos as $info) {
            CompanyInfo::create($info);
        }
    }
}
