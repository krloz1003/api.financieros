<?php

namespace App\Imports;

use App\Models\RRHH\CatPuesto;
use Maatwebsite\Excel\Concerns\ToModel;

class PuestosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return CatPuesto::firstOrCreate([
            'clave'     => $row[0],
            'nombre'    => $row[1]
        ]);
    }
}
