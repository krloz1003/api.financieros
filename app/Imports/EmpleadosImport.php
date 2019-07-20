<?php

namespace App\Imports;

use App\Models\RRHH\Empleado;
use App\Models\RRHH\CatArea;
use App\Models\RRHH\CatCargo;
use App\Models\RRHH\CatPuesto;
use Maatwebsite\Excel\Concerns\ToModel;

class EmpleadosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /*$idPuesto = CatPuesto::where('clave',$row[0])->first();
        $idCargo = CatCargo::where('nombre',$row[2])->first();
        $idArea = CatArea::where('nombre',$row[3])->first();*/
        //dump($row[4], $row[5], $row[6], $idPuesto->id, $idCargo->id, $idArea->id);
        return new Empleado([
            'idPuesto'      =>  $row[2],
            'idCargo'       =>  $row[4],
            'idArea'        =>  $row[6],
            'nombres'       =>  $row[7],
            'primerAp'      =>  $row[8],
            'segundoAp'     =>  $row[9],
            'sexo'          =>  $row[10]
        ]);
    }
}
