<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StorageImagesController extends Controller
{
    public function index()
    {
        $folder = public_path('../public/images');
        $files = scandir($folder);

        $arr = [];
        $total_size = 0;
        foreach ($files as $file) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                $arr[] = $file;
                $size = filesize($folder . '/' . $file);
                $total_size += $size;
            }
        }
        $data = array(
            'namePage' => "Storage Images",
            'breadcrumb_1' => "dashboard",
            "breadcrumb_2" => "Images",
            "breadcrumb_3" => "tabel",
            'total_size' => round($total_size / 1048576, 2),
            'data' => $arr
        );
        return view('admin.pages.storage.table', $data);
    }
}
