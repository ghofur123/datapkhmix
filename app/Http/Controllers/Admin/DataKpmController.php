<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\DataKpmImport;
use App\Models\DataKpm;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\File;

class DataKpmController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Data KPM ( Keluaga Penerima Manfaat )",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data kpm",
            "breadcrumb_3" => "tabel",
            "data" => DataKpm::orderBy('nik', 'ASC')->get()
        );
        return view('admin.pages.kpm.data', $data);
    }
    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = uniqid() . $file->getClientOriginalName();

        // upload file
        $file->move('public/excel', $fileName);
        // import excel to mysql
        Excel::import(new DataKpmImport, public_path('../public/excel/' . $fileName));
        // delete file
        unlink('public/excel/' . $fileName);
        return response([
            'success' => true,
            'message' => 'upload data success'
        ]);
    }
}
