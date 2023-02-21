<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataKpm;
use Illuminate\Http\Request;

class DataPkhController extends Controller
{
    public function index(Request $request)
    {
        $data = response([
            'data' => DataKpm::where([
                'rw' => $request->rw
            ])->get()
        ]);
        return $data;
    }
}
