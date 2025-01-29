<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePerfumeRequest;
use App\Http\Requests\UpdatePerfumeRequest;
use App\Models\Brand;
use App\Models\Perfume;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $perfumes = Perfume::all();
        
        
        // $brands = Brand::with('perfumes')->where('id', '=', $id)->first();

        return view('admin.perfumes.index', compact('perfumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.perfumes.index',compact('brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePerfumeRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['brand_id'] = $request->input('brand_id');

        $newPerfume = new Perfume();
        $newPerfume->fill($validatedData);
        $newPerfume->save();

        return redirect()->route('admin.perfumes.index', $newPerfume->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfume $perfume)
    {
        return view('admin.perfumes.show', compact('perfumes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perfume $perfume)
    {
        return view('admin.perfumes.edit', compact('perfumes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePerfumeRequest $request, Perfume $perfume)
    {
        $request->validated();
        
        $perfume->update($request->all());
        $perfume->save();

        return view('admin.perfumes.show', compact('perfume'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perfume $perfume)
    {
        $perfume->delete();

        return redirect()->route('admin.perfumes.index');
    }
}
