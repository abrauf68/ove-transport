<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view car brand');
        try {
            $carBrands = CarBrand::get();
            return view('dashboard.car-brand.index', compact('carBrands'));
        } catch (\Throwable $th) {
            Log::error('CarBrand Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create car brand');
        try {
            return view('dashboard.car-brand.create');
        } catch (\Throwable $th) {
            Log::error('CarBrand Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->authorize('create car brand');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:car_brands,slug',
        ]);

        if ($validator->fails()) {
            Log::error('Car Brand Store Validation Failed', ['error' => $validator->errors()->all()]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $carBrand = new CarBrand();
            $carBrand->name = $request->name;
            $carBrand->slug = $request->slug;
            $carBrand->save();

            DB::commit();
            return redirect()->route('dashboard.car-brands.index')->with('success', 'Car Brand Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Car Brand Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update car brand');
        try {
            $carBrand = CarBrand::findOrFail($id);
            return view('dashboard.car-brand.edit', compact('carBrand'));
        } catch (\Throwable $th) {
            Log::error('Car Brand Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update car brand');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:car_brands,slug,'.$id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $carBrand = CarBrand::findOrFail($id);
            $carBrand->name = $request->name;
            $carBrand->slug = $request->slug;
            $carBrand->save();

            return redirect()->route('dashboard.car-brands.index')->with('success', 'Car Brand Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('CarBrand Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete car brand');
        try {
            $carBrand = CarBrand::findOrFail($id);
            $carBrand->delete();
            return redirect()->back()->with('success', 'Car Brand Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Car Brand Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update car brand');
        try {
            $carBrand = CarBrand::findOrFail($id);
            $message = $carBrand->is_active == 'active' ? 'Car Brand Deactivated Successfully' : 'Car Brand Activated Successfully';
            if ($carBrand->is_active == 'active') {
                $carBrand->is_active = 'inactive';
                $carBrand->save();
            } else {
                $carBrand->is_active = 'active';
                $carBrand->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Car Brand Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}
