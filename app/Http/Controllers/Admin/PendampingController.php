<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\PendampingImport;
use App\Models\Pendamping;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Events\AfterImport;

class PendampingController extends Controller
{
    public function index()
    {
        $data = array(
            'namePage' => "Pendamping",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Pendamping",
            "breadcrumb_3" => "tabel",
            "data" => Pendamping::orderBy('nama', 'ASC')->get()
        );
        return view('admin.pages.pendamping.table', $data);
    }
    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = uniqid() . $file->getClientOriginalName();

        // upload file
        $file->move('public/excel', $fileName);
        // import excel to mysql
        Excel::import(new PendampingImport, public_path('../public/excel/' . $fileName));
        // mmberi delay
        sleep(5);
        // delete file
        unlink('public/excel/' . $fileName);
        return response([
            'success' => true,
            'message' => 'upload data success'
        ]);
    }
    public function destroy(Request $request)
    {
        Pendamping::where([
            'id' => $request->id
        ])->delete();
        return response([
            'success' => false,
            'message' => 'success'
        ]);
    }
}
