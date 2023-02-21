<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisGambar;

class JenisFotoController extends Controller
{
    public function index(){
        $data = response([
            'data' => JenisGambar::all()
        ]);
        return $data;
    }
}
