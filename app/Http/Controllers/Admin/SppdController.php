<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\SppdImport;
use App\Models\DataKpm;
use App\Models\Sppd;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SppdController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Data SPPD ( Surat Perintah Pencairan Dana )",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data Sppd",
            "breadcrumb_3" => "tabel",
            "data" => Sppd::join('data_kpm', 'sppd.nik', '=', 'data_kpm.nik')
                ->join('jenis_bantuan', 'sppd.jenis_bantuan_id', '=', 'jenis_bantuan.id')
                ->select('sppd.nik', 'data_kpm.nama_penerima', 'jenis_bantuan.nama as jenis_bantuan', 'sppd.jenis_bantuan_id', 'sppd.tahun', 'sppd.tahab', 'sppd.status', 'sppd.nominal')
                ->get()
        );
        // with('sppds') di ambil dari function one to many
        return view('admin.pages.sppd.table', $data);
    }
    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = uniqid() . $file->getClientOriginalName();

        // upload file
        $file->move('public/excel', $fileName);
        // import excel to mysql
        Excel::import(new SppdImport, public_path('../public/excel/' . $fileName));
        // delete file
        unlink('public/excel/' . $fileName);
        return response([
            'success' => true,
            'message' => 'upload data success'
        ]);
    }
}
