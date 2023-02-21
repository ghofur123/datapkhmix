<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pelaporan;
use Illuminate\Http\Request;

class PelaporanController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Pelaporan",
            "breadcrumb_3" => "tabel",
            "data" => Pelaporan::orderBy('id', 'DESC')->get()
        );
        return view('admin.pages.pelaporan.table', $data);
    }
}
