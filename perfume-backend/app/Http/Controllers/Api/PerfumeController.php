<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    public function index(Request $request)
    {

        $perfumes = Perfume::all();

        $name = $request->query('name');
        
        if ($name) {
            $perfumes = Perfume::where('name', 'like', '%' . $name . '%')->get();
        } else{
            $perfumes = Perfume::all();
        }

        return response()->json([
            'success' => true,
            'results' => $perfumes
        ]);
    }
    public function show($id)
    {
        $perfume = Perfume::with('brand')->findOrFail($id);
        return response()->json($perfume);
    }
}
