<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{
    public function provinces()
    {
        $response = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        $provinces = $response->json();

        return view('admin.pages.wilayah.provinces', compact('provinces'));
    }
    public function regencies(Request $request)
    {
        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/regencies/' . $request->id . '.json');
        $regencies = $response->json();

        return view('admin.pages.wilayah.regencies', compact('regencies'));
    }
    public function districts(Request $request)
    {
        $response = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/districts/' . $request->id . '.json');
        $districts = $response->json();

        return view('admin.pages.wilayah.districts', compact('districts'));
    }
}
