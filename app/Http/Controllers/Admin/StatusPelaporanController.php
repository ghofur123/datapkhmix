<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StatusPelaporan;
use Illuminate\Http\Request;

class StatusPelaporanController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Status Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Status Pelaporan",
            "breadcrumb_3" => "tabel",
            "data" => StatusPelaporan::orderBy('nama', 'ASC')->get()
        );
        return view('admin.pages.status_pelaporan.table', $data);
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Jenis Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Pelaporan",
            "breadcrumb_3" => "form",
            "data" => StatusPelaporan::where([
                'id' => $request->id
            ])->get()
        );
        return view('admin.pages.status_pelaporan.update', $data);
    }
    public function store(Request $request)
    {
        $validation = Validator($request->all(), [
            'nama' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        StatusPelaporan::insert([
            'nama' => $request->nama,
        ]);
        return response([
            'success' => true,
            'message' => 'success'
        ]);
    }
    public function update(Request $request)
    {
        $validation = Validator($request->all(), [
            'nama' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        StatusPelaporan::where([
            'id' => $request->id
        ])->update([
            'nama' => $request->nama,
        ]);
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
    public function destroy(Request $request)
    {
        StatusPelaporan::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
