<?php

namespace App\Helpers;

use App\Models\BusinessSetting;
use App\Models\CarBrand;
use App\Models\CompanyInfoCategory;
use App\Models\CompanyService;
use App\Models\CompanySetting;
use App\Models\Faq;
use App\Models\HowItWork;
use App\Models\Package;
use App\Models\Price;
use App\Models\ServiceCategory;
use App\Models\SystemSetting;
use App\Models\ServiceFeature;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver as GdDriver;
use Intervention\Image\Encoders\WebpEncoder;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;


class Helper
{


    public static function optimizeImage($filename, $alt = '', $class = '')
    {
        $path = public_path($filename);
        if (!file_exists($path)) return '';

        // Optimize the original image file
        ImageOptimizer::optimize($path);

        // Convert to WebP in memory
        $manager = new ImageManager(new GdDriver());
        $image = $manager->read($path)->encode(new WebpEncoder(quality: 80));

        // Get base64-encoded data
        $webpBase64 = base64_encode((string) $image);

        return <<<HTML
        <picture>
            <source srcset="data:image/webp;base64,{$webpBase64}" type="image/webp">
            <img src="/{$filename}" class="img-fluid {$class}" alt="{$alt}" loading="lazy">
        </picture>
        HTML;
    }
    public static function dashboard_route()
    {
        $user = User::find(Auth::user()->id);
        $route = $user->role->role . '.dashboard';
        return $route;
    }
    public static function getLogoLight()
    {
        return CompanySetting::first()->light_logo ?? asset('assets/img/logo/global-search.png');
    }
    public static function getLogoDark()
    {
        return CompanySetting::first()->dark_logo ?? asset('assets/img/logo/global-search.png');
    }
    public static function getFavicon()
    {
        return CompanySetting::first()->favicon ?? asset('assets/img/favicon/favicon.png');
    }
    public static function getCompanyName()
    {
        return CompanySetting::first()->company_name ?? env('APP_NAME');
    }
    public static function getCompanyPhone()
    {
        $companySetting = CompanySetting::with('country')->first();
        if ($companySetting->country) {
            $companyPhone = $companySetting->country->phone_code . $companySetting->phone_number;
            return $companyPhone;
        } else {
            $companyPhone = '+1' . $companySetting->phone_number;
            return $companyPhone;
        }
    }
    public static function getGoogleAddress()
    {
        $companySetting = CompanySetting::with('country')->first();
        $country = $companySetting->country->name ?? 'United States';
        $city = $companySetting->city ?? 'New York';
        $address = $companySetting->address ?? 'Suite #05 Beacon Street';

        // Combine address
        $fullAddress = "{$address}, {$city}, {$country}";
        $encodedAddress = urlencode($fullAddress);

        // Return full embed URL
        return "https://www.google.com/maps?q={$encodedAddress}&output=embed";
    }

    public static function getCompanyEmail()
    {
        return CompanySetting::first()->email ?? '';
    }
    public static function getCompanyCity()
    {
        return CompanySetting::first()->city ?? 'New York';
    }
    public static function getCompanyZip()
    {
        return CompanySetting::first()->zip ?? '12345';
    }
    public static function getCompanyAddress()
    {
        return CompanySetting::first()->address ?? 'Suite #05 Beacon Street';
    }
    public static function getCompanyCountry()
    {
        if (isset(CompanySetting::first()->country)) {
            return CompanySetting::first()->country->name;
        } else {
            return "United States";
        }
    }
    public static function getCompanyFacebook()
    {
        return CompanySetting::first()->facebook ?? null;
    }
    public static function getCompanyInstagram()
    {
        return CompanySetting::first()->instagram ?? null;
    }
    public static function getCompanyTwitter()
    {
        return CompanySetting::first()->twitter ?? null;
    }
    public static function getCompanyLinkedin()
    {
        return CompanySetting::first()->linkedin ?? null;
    }
    public static function getTimezone()
    {
        $systemSetting = SystemSetting::with('timezone')->first();
        return $systemSetting->timezone->name ?? env('APP_TIMEZONE', 'UTC');
    }
    public static function getDefaultLanguage()
    {
        $systemSetting = SystemSetting::with('language')->first();
        return $systemSetting->language->iso_code ?? 'en';
    }
    public static function getfooterText()
    {
        return SystemSetting::first()->footer_text ?? 'All Copyrights Reserved';
    }
    public static function getHowItWorks()
    {
        $howItWorks = HowItWork::where('is_active', 'active')->get();
        if (isset($howItWorks) && count($howItWorks) > 0) {
            return $howItWorks;
        } else {
            return [];
        }
    }
    public static function getServices()
    {
        $services = CompanyService::where('is_active', 'active')->get();
        if (isset($services) && count($services) > 0) {
            return $services;
        } else {
            return [];
        }
    }
    public static function getFeaturedServices()
    {
        $services = CompanyService::where('is_active', 'active')->where('is_featured', '1')->get();
        if (isset($services) && count($services) > 0) {
            return $services;
        } else {
            return [];
        }
    }
    public static function getServiceCategories()
    {
        $serviceCategories = ServiceCategory::with('ServiceSubCategories.companyServices')->where('is_active', 'active')->get();
        if (isset($serviceCategories) && count($serviceCategories) > 0) {
            return $serviceCategories;
        } else {
            return [];
        }
    }
    public static function getCompanyInfoCategories()
    {
        $companyInfoCategories = CompanyInfoCategory::with('companyInfo')->where('is_active', 'active')->get();
        if (isset($companyInfoCategories) && count($companyInfoCategories) > 0) {
            return $companyInfoCategories;
        } else {
            return [];
        }
    }
    public static function getTestimonials()
    {
        $testimonials = Testimonial::where('is_active', 'active')->get();
        if (isset($testimonials) && count($testimonials) > 0) {
            return $testimonials;
        } else {
            return [];
        }
    }
    public static function getCarBrands()
    {
        $carBrands = CarBrand::where('is_active', 'active')->get();
        if (isset($carBrands) && count($carBrands) > 0) {
            return $carBrands;
        } else {
            return [];
        }
    }
    public static function getFaqs()
    {
        $faqs = Faq::where('is_active', 'active')->get();
        if (isset($faqs) && count($faqs) > 0) {
            return $faqs;
        } else {
            return [];
        }
    }
    public static function getEnclosedPrice($distance)
    {
        $totalPrice = 0;
        $distance = (int) $distance;
        $prices = Price::first();
        $totalPrice = $prices->enclosed_price * $distance;

        return self::formatCurrency($totalPrice);
    }
    public static function getNonRunningPrice()
    {
        $price = Price::first();
        return self::formatCurrency($price->non_running_price);
    }
    public static function getPrice($distance, $transportType, $condition)
    {
        $totalPrice = 0;
        $distance = (int) $distance;
        $transportType = strtolower($transportType);
        $condition = strtolower($condition);

        $prices = Price::first();
        $totalPrice = $prices->transport_price * $distance;
        if ($transportType == 'enclosed' && $prices->enclosed_price > 0) {
            $totalPrice += $prices->enclosed_price * $distance;
        }
        if ($condition == 'non-running' && $prices->non_running_price > 0) {
            $totalPrice += $prices->non_running_price;
        }

        return $totalPrice;
    }
    public static function getFeatures()
    {
        $features = ServiceFeature::where('is_active', 'active')->get();
        if (isset($features) && count($features) > 0) {
            return $features;
        } else {
            return [];
        }
    }
    public static function getPackages()
    {
        $packages = Package::with('packageItems')->where('is_active', 'active')->get();
        if (isset($packages) && count($packages) > 0) {
            return $packages;
        } else {
            return [];
        }
    }
    public static function getMaxUploadSize()
    {
        $sizeInKB = SystemSetting::first()->max_upload_size ?? 2048; // Stored in KB

        return self::humanReadableSize($sizeInKB * 1024); // Convert KB to Bytes
    }

    // Helper function to format size into KB, MB, GB, etc.
    public static function humanReadableSize($bytes, $decimals = 2)
    {
        $sizes = ['B', 'KB', 'MB', 'GB', 'TB'];
        $factor = floor((strlen($bytes) - 1) / 3);

        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sizes[$factor];
    }


    // example use of currency format {{ \App\Helpers\Helper::formatCurrency($price) }}
    public static function formatCurrency($amount)
    {
        $currencySetting = SystemSetting::first();

        if (!$currencySetting) {
            return $amount; // Return the amount as is if settings are not found
        }

        $symbol = $currencySetting->currency_symbol;
        $position = $currencySetting->currency_symbol_position; // 'prefix' or 'postfix'

        if ($position === 'prefix') {
            return $symbol . $amount;
        }

        return $amount . $symbol;
    }
    public static function getCurrencySymbol()
    {
        $currencySetting = SystemSetting::first();
        $symbol = $currencySetting->currency_symbol ?? '$';
        return $symbol;
    }

    public static function renderRecaptcha($formId, $action = 'register')
    {
        if (config('captcha.version') === 'v3') {
            return self::renderRecaptchaV3($formId, $action);
        }
    }

    private static function renderRecaptchaV3($formId, $action)
    {
        $siteKey = config('captcha.sitekey');
        return <<<HTML
            <script src="https://www.google.com/recaptcha/enterprise.js?render={$siteKey}"></script>
            <script>
                function handleRecaptcha(formId, action) {
                    document.getElementById(formId).addEventListener('submit', function(e) {
                        e.preventDefault();
                        grecaptcha.enterprise.ready(async () => {
                            try {
                                const token = await grecaptcha.enterprise.execute('{$siteKey}', { action: action });
                                const form = document.getElementById(formId);
                                const input = document.createElement('input');
                                input.type = 'hidden';
                                input.name = 'g-recaptcha-response';
                                input.value = token;
                                form.appendChild(input);
                                form.submit();
                            } catch (error) {
                                console.error('Error executing reCAPTCHA:', error);
                            }
                        });
                    });
                }

                document.addEventListener('DOMContentLoaded', function() {
                    handleRecaptcha('{$formId}', '{$action}');
                });
            </script>
        HTML;
    }
}
