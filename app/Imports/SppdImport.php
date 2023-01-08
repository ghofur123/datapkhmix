<?php

namespace App\Imports;

use App\Models\Sppd;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class SppdImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sppd([
            'uniq' => $row[1] . $row[2] . $row[3] . $row[4],
            'nik' => $row[1],
            'jenis_bantuan_id' => $row[2],
            'tahun' => $row[3],
            'tahab' => $row[4],
            'status' => $row[5],
            'nominal' => $row[6],
            'catatan' => $row[7],
        ]);
    }
}
