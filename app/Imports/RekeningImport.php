<?php

namespace App\Imports;

use App\Models\Rekening;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class RekeningImport implements ToModel, WithStartRow
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
        return new Rekening([
            'nik' => $row[1],
            'penyalur_id' => $row[2],
            'no_rekening' => $row[3],
            'uniq' => $row[1] . $row[3],
        ]);
    }
}
