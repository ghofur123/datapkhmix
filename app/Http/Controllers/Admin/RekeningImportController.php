<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\RekeningImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RekeningImportController extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');
        $fileName = uniqid() . $file->getClientOriginalName();

        // upload file
        $file->move('public/excel', $fileName);
        // import excel to mysql
        Excel::import(new RekeningImport, public_path('../public/excel/' . $fileName));
        // mmberi delay
        sleep(5);
        // delete file
        unlink('public/excel/' . $fileName);
        return response([
            'success' => true,
            'message' => 'upload data success'
        ]);
    }
}
