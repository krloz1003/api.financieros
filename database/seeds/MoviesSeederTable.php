<?php

use Illuminate\Database\Seeder;
use App\Models\Example\Movie;
use App\Models\Viatico\Comision;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PuestosImport;
use App\Imports\AreasImport;
use App\Imports\CargosImport;
use App\Imports\EmpleadosImport;



class MoviesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class, 100)->create();
        factory(Comision::class, 100)->create();

        Excel::import(new PuestosImport, 'public\rh\catPuestos_new.xlsx');
        Excel::import(new AreasImport, 'public\rh\catArea.xlsx');
        Excel::import(new CargosImport, 'public\rh\catCargo.xlsx');
        Excel::import(new EmpleadosImport, 'public\rh\plantilla_new.xlsx');
    }
}
