<?php

namespace App\Models\RRHH;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $appends = ['area_nombre', 'cargo_nombre', 'puesto_nombre'];    

    public function catArea()
    {
        return $this->belongsTo('App\Models\RRHH\CatArea','idArea');
    }

    public function catCargo()
    {
        return $this->belongsTo('App\Models\RRHH\CatCargo','idCargo');
    }

    public function catPuesto()
    {
        return $this->belongsTo('App\Models\RRHH\CatPuesto','idPuesto');
    }

    public function getAreaNombreAttribute(){
    	$this->catArea->nombre;
    }

    public function getCargoNombreAttribute(){
    	$this->catCargo->nombre;
    }

    public function getPuestoNombreAttribute(){
    	$this->catPuesto->nombre;
    }
}
