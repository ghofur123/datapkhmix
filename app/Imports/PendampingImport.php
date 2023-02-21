<?php

namespace App\Imports;

use App\Models\Pendamping;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class PendampingImport implements ToModel, WithStartRow
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
        return new Pendamping([
            'nik' => $row[1],
            'nama' => $row[2],
            'kecamatan_dampingan' => $row[3],
        ]);
    }
}
