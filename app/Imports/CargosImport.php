<?php

namespace App\Imports;

use App\Models\RRHH\CatCargo;
use Maatwebsite\Excel\Concerns\ToModel;

class CargosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return CatCargo::firstOrCreate([
            'nombre'    => $row[0]
        ]);
    }
}
