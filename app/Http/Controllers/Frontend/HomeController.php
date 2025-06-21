<?php

namespace App\Http\Controllers\Frontend;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use App\Models\CarModel;
use App\Models\CompanyInfo;
use App\Models\CompanyService;
use App\Models\HowItWork;
use App\Models\Quote;
use App\Models\ServiceFeature;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        try {
            $carBrands = CarBrand::where('is_active', 'active')->get();
            $services = CompanyService::where('is_active', 'active')->where('is_featured', '1')->get();
            return view('frontend.home', compact('services','carBrands'));
        } catch (\Throwable $th) {
            Log::error('Home View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function about()
    {
        try {
            $teams = Team::with('designation')->where('is_active', 'active')->get();
            return view('frontend.about',compact('teams'));
        } catch (\Throwable $th) {
            Log::error('About View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function services($slug = null)
    {
        try {
            if($slug !== null){
                $service = CompanyService::where('slug', $slug)->first();
                if($service->is_active !== 'active'){
                    return redirect()->back()->with('message', "This service has been deactivated!");
                }
                $featuredServices = CompanyService::where('is_active', 'active')->where('is_featured', '1')->get();
                return view('frontend.service_details', compact('service','featuredServices'));
            }else{
                $services = CompanyService::where('is_active', 'active')->get();
                return view('frontend.services', compact('services'));
            }
        } catch (\Throwable $th) {
            Log::error('Services View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function howItWorks($slug = null)
    {
        try {
            if($slug !== null){
                $howItWork = HowItWork::where('slug', $slug)->first();
                if($howItWork->is_active !== 'active'){
                    return redirect()->back()->with('message', "This guide has been deactivated!");
                }
                $allHowItWorks = HowItWork::where('is_active', 'active')->get();
                return view('frontend.howItWorks_details', compact('howItWork','allHowItWorks'));
            }else{
                return redirect()->route('frontend.home');
            }
        } catch (\Throwable $th) {
            Log::error('How It Works View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function whyUs($slug = null)
    {
        try {
            if($slug !== null){
                $whyUs = CompanyInfo::where('slug', $slug)->first();
                if($whyUs->is_active !== 'active'){
                    return redirect()->back()->with('message', "This info has been deactivated!");
                }
                // $allHowItWorks = HowItWork::where('is_active', 'active')->get();
                return view('frontend.whyUs_details', compact('whyUs'));
            }else{
                return redirect()->route('frontend.home');
            }
        } catch (\Throwable $th) {
            Log::error('Why Us View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

     public function features($slug = null)
    {
        try {
            if($slug !== null){
                $feature = ServiceFeature::where('slug', $slug)->first();
                if($feature->is_active !== 'active'){
                    return redirect()->back()->with('message', "This feature has been deactivated!");
                }
                $allFeatures = ServiceFeature::where('is_active', 'active')->get();
                return view('frontend.feature_details', compact('feature','allFeatures'));
            }else{
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            Log::error('Services View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function pricing()
    {
        try {
            return view('frontend.pricing');
        } catch (\Throwable $th) {
            Log::error('Pricing View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function contact()
    {
        try {
            return view('frontend.contact');
        } catch (\Throwable $th) {
            Log::error('Contact View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function getAQuote()
    {
        try {
            $carBrands = CarBrand::where('is_active', 'active')->get();
            return view('frontend.get-a-quote', compact('carBrands'));
        } catch (\Throwable $th) {
            Log::error('Get A Quote View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function quoteDetails($quoteId)
    {
        try {
            $quote = Quote::where('quoteId', $quoteId)->first();
            if(!$quote){
                return redirect()->route('frontend.home');
            }
            return view('frontend.quote-details', compact('quote'));
        } catch (\Throwable $th) {
            Log::error('Quote Details View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function updateQuoteDetails(Request $request, $id)
    {
        $rules = [
            'transport_type' => 'nullable|in:open,enclosed',
            'condition' => 'nullable|in:running,non-running',
        ];

        $validate = Validator::make($request->all(), $rules);
        if ($validate->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validate->errors()->first(),
            ], 422);
        }
        try {
            $quote = Quote::findOrFail($id);
            $quote->transport_type = $request->transport_type;
            $quote->condition = $request->condition;
            $quote->save();

            $price = Helper::getPrice($quote->distance, $quote->transport_type, $quote->condition);
            $quote->price = $price;
            $quote->save();
            return response()->json([
                'success' => true,
                'message' => "Quote updated successfully",
            ],200);
        } catch (\Throwable $th) {
            Log::error('Quote Details View Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => "Something went wrong! Please try again later",
            ],500);
            throw $th;
        }
    }
    public function serviceDetails()
    {
        try {
            return view('frontend.service_details');
        } catch (\Throwable $th) {
            Log::error('Service Details View Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function getModelsbyBrand($id)
    {
        try {
            $models = CarModel::where('car_brand_id', $id)->where('is_active', 'active')->get();
            return response()->json([
                'success' => true,
                'models' => $models,
            ],200);

        } catch (\Throwable $th) {
            Log::error('Services View Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => "Something went wrong! Please try again later",
            ],500);
            throw $th;
        }
    }
}
