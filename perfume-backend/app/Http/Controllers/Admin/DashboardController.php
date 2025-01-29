<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Perfume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $user = Auth::user();
        $brands = Brand::all();
        $perfumes = Perfume::all();

        return view('admin.dashboard', compact('user','brand','perfume'));
    }
}
