<?php

namespace App\Imports;

use App\Models\RRHH\CatArea;
use Maatwebsite\Excel\Concerns\ToModel;

class AreasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return CatArea::firstOrCreate([
            'nombre'    => $row[0]
        ]);
    }
}
