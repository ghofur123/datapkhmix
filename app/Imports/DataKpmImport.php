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
            'nmpendamping_lama' => $row[6],
            'nmpendamping_baru' => $row[7],
            'dusun' => $row[8],
            'rt' => $row[9],
            'rw' => $row[10],
        ]);
    }
}
