<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataKpm;
use App\Models\Gambar;
use App\Models\JenisGambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class GambarController extends Controller
{
    public function index()
    {
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Gambar",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Gambar",
            "breadcrumb_3" => "tabel",
            "nik" => $request->nik,
            "gambar" => Gambar::where([
                'nik' => $request->nik
            ])->get(),
            "data_kpm" => DataKpm::where([
                'nik' => $request->nik
            ])->get(),
            "jenis_gambar" => JenisGambar::orderBy('nama', 'ASC')->get(),
        );
        return view('admin.pages.gambar.table', $data);
    }
    public function store(Request $request)
    {
        $validation = validator($request->all(), [
            'file' => 'required|mimes:png,jpg,jpeg,gif',
            'nik' => 'required',
            'jenis_gambar_id' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        $file = $request->file('file');
        $fileName = $request->nik . $request->jenis_gambar_id . $file->getSize() . str_replace(' ', '-', $file->getClientOriginalName());
        Gambar::insert([
            'nik' => $request->nik,
            'jenis_gambar_id' => $request->jenis_gambar_id,
            'name' => $fileName,
            'ext_name' => $file->getClientOriginalExtension(),
            'type' => $file->getMimeType(),
            'size' => $file->getSize(),
            'path' => $file->getRealPath(),
            'url' => URL::asset('public/images/'),
        ]);
        $file->move('public/images', $fileName);
        return response([
            'success' => true,
            'message' => 'success',
        ]);
    }
    public function update()
    {
    }
    public function destroy(Request $request)
    {
        $validation = validator($request->all(), [
            'id' => 'required'
        ]);
        // check validation
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        $db =  Gambar::where('id', $request->id)->first();
        // File::delete('uploads/' . $db->name);
        Gambar::where([
            'id' => $request->id
        ])->delete();
        if (file_exists('../public/images/' . $db->name)) {
            unlink('../public/images/' . $db->name);
            return response([
                'success' => true,
                'message' => 'data berhasil di hapus'
            ]);
        } else {
            return response([
                'success' => true,
                'message' => 'data gagal di hapus'
            ]);
        }
    }
}
