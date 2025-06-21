<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfo;
use App\Models\CompanyInfoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class WhyUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view why us');
        try {
            $companyInfos = CompanyInfo::all();
            return view('dashboard.why-us.index', compact('companyInfos'));
        } catch (\Throwable $th) {
            Log::error('Why Us Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create why us');
        try {
            $companyInfoCategories = CompanyInfoCategory::where('is_active', 'active')->get();
            return view('dashboard.why-us.create', compact('companyInfoCategories'));
        } catch (\Throwable $th) {
            Log::error('companyInfo Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create why us');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:company_infos,slug',
            'company_info_category_id' => 'required|exists:company_info_categories,id',
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
            $info = new CompanyInfo();
            $info->name = $request->name;
            $info->slug = $request->slug;
            $info->meta_title = $request->meta_title;
            $info->meta_description = $request->meta_description;
            $info->details = $request->details;
            $info->company_info_category_id = $request->company_info_category_id;
            $info->is_featured = $isFeatured;

            if ($request->hasFile('meta_image')) {
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/infos';
                $Image->move(public_path($Image_path), $Image_name);
                $info->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/infos';
                $Image->move(public_path($Image_path), $Image_name);
                $info->main_image = $Image_path . "/" . $Image_name;
            }

            $info->save();

            DB::commit();
            return redirect()->route('dashboard.why-us.index')->with('success', 'Info Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('CompanyInfo Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update why us');
        try {
            $companyInfo = CompanyInfo::findOrFail($id);
            $companyInfoCategories = CompanyInfoCategory::where('is_active', 'active')->get();
            return view('dashboard.why-us.edit', compact('companyInfo','companyInfoCategories'));
        } catch (\Throwable $th) {
            Log::error('Company Info Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update why us');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:company_infos,slug,' . $id,
            'company_info_category_id' => 'required|exists:company_info_categories,id',
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
            $info = CompanyInfo::findOrFail($id);
            $info->name = $request->name;
            $info->slug = $request->slug;
            $info->meta_title = $request->meta_title;
            $info->meta_description = $request->meta_description;
            $info->details = $request->details;
            $info->company_info_category_id = $request->company_info_category_id;
            $info->is_featured = $isFeatured;

            if ($request->hasFile('meta_image')) {
                if (isset($info->meta_image) && File::exists(public_path($info->meta_image))) {
                    File::delete(public_path($info->meta_image));
                }
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/infos';
                $Image->move(public_path($Image_path), $Image_name);
                $info->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                if (isset($info->main_image) && File::exists(public_path($info->main_image))) {
                    File::delete(public_path($info->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/infos';
                $Image->move(public_path($Image_path), $Image_name);
                $info->main_image = $Image_path . "/" . $Image_name;
            }

            $info->save();

            return redirect()->route('dashboard.why-us.index')->with('success', 'Info Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('CompanyInfo Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete why us');
        try {
            $companyInfo = CompanyInfo::findOrFail($id);
            if (isset($companyInfo->meta_image) && File::exists(public_path($companyInfo->meta_image))) {
                File::delete(public_path($companyInfo->meta_image));
            }
            if (isset($companyInfo->main_image) && File::exists(public_path($companyInfo->main_image))) {
                File::delete(public_path($companyInfo->main_image));
            }
            $companyInfo->delete();
            return redirect()->back()->with('success', 'Info Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('CompanyInfo Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateServiceStatus(string $id)
    {
        $this->authorize('update why us');
        try {
            $companyInfo = CompanyInfo::findOrFail($id);
            $message = $companyInfo->is_active == 'active' ? 'Info Deactivated Successfully' : 'Info Activated Successfully';
            if ($companyInfo->is_active == 'active') {
                $companyInfo->is_active = 'inactive';
                $companyInfo->save();
            } else {
                $companyInfo->is_active = 'active';
                $companyInfo->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Info Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
