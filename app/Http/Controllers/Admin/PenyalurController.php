<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyalur;
use Illuminate\Http\Request;

class PenyalurController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Penyalur",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Penyalur",
            "breadcrumb_3" => "tabel",
            "data" => Penyalur::orderBy('nama_penyalur', 'ASC')->get()
        );
        return view('admin.pages.penyalur.table', $data);
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Penyalur",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Penyalur",
            "breadcrumb_3" => "form",
            "data" => Penyalur::where([
                'id' => $request->id
            ])->get()
        );
        return view('admin.pages.penyalur.update', $data);
    }
    public function store(Request $request)
    {
        $validation = Validator($request->all(), [
            'nama_penyalur' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        Penyalur::insert([
            'nama_penyalur' => $request->nama_penyalur,
        ]);
        return response([
            'success' => true,
            'message' => 'success'
        ]);
    }
    public function update(Request $request)
    {
        $validation = Validator($request->all(), [
            'nama_penyalur' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        Penyalur::where([
            'id' => $request->id
        ])->update([
            'nama_penyalur' => $request->nama_penyalur,
        ]);
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
    public function destroy(Request $request)
    {
        Penyalur::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
