<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadExcelTemplate(Request $request)
    {
        return response()->download(public_path('excel/template/' . $request->name));
    }
}
