<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\HowItWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HowItWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view how it work');
        try {
            $howItWorks = HowItWork::all();
            return view('dashboard.how-it-works.index', compact('howItWorks'));
        } catch (\Throwable $th) {
            Log::error('How It Works Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create how it work');
        try {
            return view('dashboard.how-it-works.create');
        } catch (\Throwable $th) {
            Log::error('How It Works Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create how it work');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:how_it_works,slug',
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
            DB::beginTransaction();
            $guide = new HowItWork();
            $guide->name = $request->name;
            $guide->slug = $request->slug;
            $guide->meta_title = $request->meta_title;
            $guide->meta_description = $request->meta_description;
            $guide->details = $request->details;

            if ($request->hasFile('meta_image')) {
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/guides';
                $Image->move(public_path($Image_path), $Image_name);
                $guide->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/guides';
                $Image->move(public_path($Image_path), $Image_name);
                $guide->main_image = $Image_path . "/" . $Image_name;
            }

            $guide->save();

            DB::commit();
            return redirect()->route('dashboard.how-it-works.index')->with('success', 'Guide Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Guide Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update how it work');
        try {
            $howItWork = HowItWork::findOrFail($id);
            return view('dashboard.how-it-works.edit', compact('howItWork'));
        } catch (\Throwable $th) {
            Log::error('HowItWork Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update how it work');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:how_it_works,slug,' . $id,
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
            $guide = HowItWork::findOrFail($id);
            $guide->name = $request->name;
            $guide->slug = $request->slug;
            $guide->meta_title = $request->meta_title;
            $guide->meta_description = $request->meta_description;
            $guide->details = $request->details;

            if ($request->hasFile('meta_image')) {
                if (isset($guide->meta_image) && File::exists(public_path($guide->meta_image))) {
                    File::delete(public_path($guide->meta_image));
                }
                $Image = $request->file('meta_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_meta_image.' . $Image_ext;

                $Image_path = 'uploads/company/guides';
                $Image->move(public_path($Image_path), $Image_name);
                $guide->meta_image = $Image_path . "/" . $Image_name;
            }
            if ($request->hasFile('main_image')) {
                if (isset($guide->main_image) && File::exists(public_path($guide->main_image))) {
                    File::delete(public_path($guide->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/guides';
                $Image->move(public_path($Image_path), $Image_name);
                $guide->main_image = $Image_path . "/" . $Image_name;
            }

            $guide->save();

            return redirect()->route('dashboard.how-it-works.index')->with('success', 'Guide Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('HowItWork Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete how it work');
        try {
            $howItWork = HowItWork::findOrFail($id);
            if (isset($howItWork->meta_image) && File::exists(public_path($howItWork->meta_image))) {
                File::delete(public_path($howItWork->meta_image));
            }
            if (isset($howItWork->main_image) && File::exists(public_path($howItWork->main_image))) {
                File::delete(public_path($howItWork->main_image));
            }
            $howItWork->delete();
            return redirect()->back()->with('success', 'Guide Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('HowItWork Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update how it work');
        try {
            $howItWork = HowItWork::findOrFail($id);
            $message = $howItWork->is_active == 'active' ? 'Guide Deactivated Successfully' : 'Guide Activated Successfully';
            if ($howItWork->is_active == 'active') {
                $howItWork->is_active = 'inactive';
                $howItWork->save();
            } else {
                $howItWork->is_active = 'active';
                $howItWork->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('HowItWork Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
