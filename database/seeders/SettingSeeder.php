<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use App\Models\EmailSetting;
use App\Models\OtherSetting;
use App\Models\Price;
use App\Models\RecaptchaSetting;
use App\Models\SystemSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanySetting::create([
            'company_name' => 'OVE Transport',
            'facebook' => 'https://facebook.com/',
            'instagram' => 'https://instagram.com/',
            'twitter' => 'https://twitter.com/',
            'linkedin' => 'https://linkedin.com/',
        ]);

        RecaptchaSetting::create([
            'google_recaptcha_type' => 'no_captcha',
        ]);

        SystemSetting::create([
            'max_upload_size' => '2048',
            'currency_symbol' => '$',
            'currency_symbol_position' => 'prefix',
            'footer_text' => 'All Copyrights Reserved',
        ]);

        EmailSetting::create([
            'mail_driver' => 'smtp',
            'mail_host' => 'smtp.mailtrap.io',
            'mail_port' => '2525',
            'mail_username' => '725adb089beee5',
            'mail_password' => 'b63984536f3df4',
            'mail_encryption' => 'tls',
            'mail_from_address' => 'no_reply@globalsearch.com',
            'mail_from_name' => 'Admin',
            'is_enabled' => '1',
        ]);

        Price::create([
            'transport_price' => '1',
            'enclosed_price' => '0.5',
            'non_running_price' => '50',
        ]);

    }
}
