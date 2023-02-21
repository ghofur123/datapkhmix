<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyalur;
use Illuminate\Http\Request;

class FormStoreController extends Controller
{
    public function DataKpmUploadExel()
    {
        $data = array(
            'namePage' => "Data KPM ( Keluaga Penerima Manfaat )",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data kpm",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.kpm.form_upload', $data);
    }
    public function SppdUploadExcel()
    {
        $data = array(
            'namePage' => "Sppd ( Surat Perintah Pencairan Dana )",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data sppd",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.sppd.form_upload', $data);
    }
    public function jenisGambar()
    {
        $data = array(
            'namePage' => "Jenis Gambar",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data jenis gambar",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.jenis_gambar.store', $data);
    }
    public function penyalur()
    {
        $data = array(
            'namePage' => "Penyalur",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data penyalur",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.penyalur.store', $data);
    }
    public function jenisBantuan()
    {
        $data = array(
            'namePage' => "Jenis Bantuan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Bantuan",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.jenis_bantuan.store', $data);
    }
    public function uploadImage(Request $request)
    {
        $data = array(
            'nik' => $request->nik,
            'jenis_gambar_id' => $request->jenisGambar
        );
        return view('admin.pages.gambar.upload', $data);
    }
    public function jenisPelaporan()
    {
        $data = array(
            'namePage' => "Jenis Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Pelaporan",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.jenis_pelaporan.store', $data);
    }
    public function statusPelaporan()
    {
        $data = array(
            'namePage' => "Status Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Status Pelaporan",
            "breadcrumb_3" => "form",
        );
        return view('admin.pages.status_pelaporan.store', $data);
    }
    public function rekening()
    {
        $data = array(
            'namePage' => "Rekening",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Rekening",
            "breadcrumb_3" => "form",
            'penyalur' => Penyalur::orderBy('nama_penyalur', 'ASC')->get()
        );
        return view('admin.pages.rekening.store', $data);
    }
    public function rekeningUploadExcel()
    {
        $data = array(
            'namePage' => "Rekening",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Rekening",
            "breadcrumb_3" => "form upload excel",
        );
        return view('admin.pages.rekening.form_upload', $data);
    }
    public function pendampingUploadExcel()
    {
        $data = array(
            'namePage' => "Pendamping",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "pendamping",
            "breadcrumb_3" => "form upload excel",
        );
        return view('admin.pages.pendamping.form_upload', $data);
    }
}
