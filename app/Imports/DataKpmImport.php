<?php

namespace App\Imports;

use App\Models\DataKpm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DataKpmImport implements ToModel, WithStartRow
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
        return new DataKpm([
            'nik' => $row[1],
            'nama_penerima' => $row[2],
            'kecamatan' => $row[3],
            'desa_kelurahan' => $row[4],
            'alamat' => $row[5],
            'nik_pendamping' => $row[6],
            'dusun' => $row[7],
            'rt' => $row[8],
            'rw' => $row[9],
        ]);
    }
}
