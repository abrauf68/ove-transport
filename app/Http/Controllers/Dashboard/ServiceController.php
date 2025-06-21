<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompanyService;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view service');
        try {
            $services = CompanyService::all();
            return view('dashboard.services.index', compact('services'));
        } catch (\Throwable $th) {
            Log::error('Services Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create service');
        try {
            $serviceCategories = ServiceCategory::where('is_active', 'active')->get();
            $serviceSubCategories = ServiceSubCategory::where('is_active', 'active')->get();
            return view('dashboard.services.create', compact('serviceCategories','serviceSubCategories'));
        } catch (\Throwable $th) {
            Log::error('Services Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create service');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:company_services,slug',
            'service_category_id' => 'required|exists:service_categories,id',
            'service_sub_category_id' => 'required|exists:service_sub_categories,id',
            'is_featured' => 'nullable|in:on',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'details' => 'required',
            'meta_image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'main_image' => 'required|image|mimes:jpeg,png,jpg|max_size',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            DB::beginTransaction();
            $service = new CompanyService();
            $service->name = $request->name;
            $service->slug = $request->slug;
            $service->meta_title = $request->meta_title;
            $service->meta_description = $request->meta_description;
            $service->details = $request->details;
            $service->service_category_id = $request->service_category_id;
            $service->service_sub_category_id = $request->service_sub_category_id;
            $service->is_featured = $isFeatured;

            if ($request->hasFile('meta_image')) {
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/services';
                $Image->move(public_path($Image_path), $Image_name);
                $service->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/services';
                $Image->move(public_path($Image_path), $Image_name);
                $service->main_image = $Image_path . "/" . $Image_name;
            }

            $service->save();

            DB::commit();
            return redirect()->route('dashboard.company-services.index')->with('success', 'Service Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Service Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update service');
        try {
            $service = CompanyService::findOrFail($id);
            $serviceCategories = ServiceCategory::where('is_active', 'active')->get();
            $serviceSubCategories = ServiceSubCategory::where('is_active', 'active')->get();
            return view('dashboard.services.edit', compact('service','serviceCategories','serviceSubCategories'));
        } catch (\Throwable $th) {
            Log::error('Service Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update service');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:company_services,slug,' . $id,
            'service_category_id' => 'required|exists:service_categories,id',
            'service_sub_category_id' => 'required|exists:service_sub_categories,id',
            'is_featured' => 'nullable|in:on',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'details' => 'required',
            'meta_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg|max_size',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $service = CompanyService::findOrFail($id);
            $service->name = $request->name;
            $service->slug = $request->slug;
            $service->meta_title = $request->meta_title;
            $service->meta_description = $request->meta_description;
            $service->details = $request->details;
            $service->service_category_id = $request->service_category_id;
            $service->service_sub_category_id = $request->service_sub_category_id;
            $service->is_featured = $isFeatured;

            if ($request->hasFile('meta_image')) {
                if (isset($service->meta_image) && File::exists(public_path($service->meta_image))) {
                    File::delete(public_path($service->meta_image));
                }
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/services';
                $Image->move(public_path($Image_path), $Image_name);
                $service->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                if (isset($service->main_image) && File::exists(public_path($service->main_image))) {
                    File::delete(public_path($service->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/services';
                $Image->move(public_path($Image_path), $Image_name);
                $service->main_image = $Image_path . "/" . $Image_name;
            }

            $service->save();

            return redirect()->route('dashboard.company-services.index')->with('success', 'Service Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Service Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete service');
        try {
            $service = CompanyService::findOrFail($id);
            if (isset($service->meta_image) && File::exists(public_path($service->meta_image))) {
                File::delete(public_path($service->meta_image));
            }
            if (isset($service->main_image) && File::exists(public_path($service->main_image))) {
                File::delete(public_path($service->main_image));
            }
            $service->delete();
            return redirect()->back()->with('success', 'Service Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Service Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateServiceStatus(string $id)
    {
        $this->authorize('update service');
        try {
            $service = CompanyService::findOrFail($id);
            $message = $service->is_active == 'active' ? 'Service Deactivated Successfully' : 'Service Activated Successfully';
            if ($service->is_active == 'active') {
                $service->is_active = 'inactive';
                $service->save();
            } else {
                $service->is_active = 'active';
                $service->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Service Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
