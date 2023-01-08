<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisBantuan;
use Illuminate\Http\Request;

class JenisBantuanController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Jenis Bantuan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Bantuan",
            "breadcrumb_3" => "tabel",
            "data" => JenisBantuan::orderBy('nama', 'ASC')->get()
        );
        return view('admin.pages.jenis_bantuan.table', $data);
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Jenis Bantuan",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Bantuan",
            "breadcrumb_3" => "tabel",
            "data" => JenisBantuan::where([
                'id' => $request->id
            ])->get()
        );
        return view('admin.pages.jenis_bantuan.update', $data);
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
        JenisBantuan::insert([
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
        JenisBantuan::where([
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
        JenisBantuan::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
