<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JenisGambar;
use App\Http\Requests\JenisGambarRequest;
use Illuminate\Http\Request;

class JenisGambarController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Jenis Gambar",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Jenis Gambar",
            "breadcrumb_3" => "tabel",
            "data" => JenisGambar::orderBy('nama', 'ASC')->get()
        );
        return view('admin.pages.jenis_gambar.table', $data);
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Jenis Gambar",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "data jenis gambar",
            "breadcrumb_3" => "form",
            "data" => JenisGambar::where([
                'id' => $request->id
            ])->get()
        );
        return view('admin.pages.jenis_gambar.update', $data);
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
        JenisGambar::insert([
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
        JenisGambar::where([
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
        JenisGambar::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
