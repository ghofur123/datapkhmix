<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisPelaporan;
use Illuminate\Http\Request;

class JenisPelaporanController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Jenis Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Pelaporan",
            "breadcrumb_3" => "tabel",
            "data" => JenisPelaporan::orderBy('nama', 'ASC')->get()
        );
        return view('admin.pages.jenis_pelaporan.table', $data);
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Jenis Pelaporan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Pelaporan",
            "breadcrumb_3" => "form",
            "data" => JenisPelaporan::where([
                'id' => $request->id
            ])->get()
        );
        return view('admin.pages.jenis_pelaporan.update', $data);
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
        JenisPelaporan::insert([
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
        JenisPelaporan::where([
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
        JenisPelaporan::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
