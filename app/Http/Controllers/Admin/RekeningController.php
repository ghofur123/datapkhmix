<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyalur;
use App\Models\Rekening;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Rekening",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Rekening",
            "breadcrumb_3" => "tabel",
            "data" => Rekening::orderBy('nik', 'ASC')->get()
        );
        return view('admin.pages.rekening.table', $data);
    }
    public function show(Request $request)
    {
        $data = array(
            'namePage' => "Rekening",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Rekening",
            "breadcrumb_3" => "form",
            'penyalur' => Penyalur::orderBy('nama_penyalur', 'ASC')->get(),
            'rekening' => Rekening::where([
                'id' => $request->id
            ])->get()
        );
        return view('admin.pages.rekening.update', $data);
    }
    public function store(Request $request)
    {
        $validation = Validator($request->all(), [
            'nik' => 'required',
            'penyalur_id' => 'required',
            'no_rekening' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        Rekening::insert([
            'nik' => $request->nik,
            'penyalur_id' => $request->penyalur_id,
            'no_rekening' => $request->no_rekening,
            'uniq' => $request->nik . $request->no_rekening,
        ]);
        return response([
            'success' => true,
            'message' => 'success'
        ]);
    }
    public function update(Request $request)
    {
        $validation = Validator($request->all(), [
            'id' => 'required',
            'nik' => 'required',
            'penyalur_id' => 'required',
            'no_rekening' => 'required',
        ]);
        if ($validation->fails()) {
            return response([
                'success' => false,
                'message' => $validation->errors()
            ]);
        }
        Rekening::where([
            'id' => $request->id
        ])
            ->update([
                'nik' => $request->nik,
                'penyalur_id' => $request->penyalur_id,
                'no_rekening' => $request->no_rekening,
                'uniq' => $request->nik . $request->no_rekening,
            ]);
        return response([
            'success' => true,
            'message' => 'success'
        ]);
    }
    public function destroy(Request $request)
    {
        Rekening::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
