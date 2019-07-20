<?php

namespace App\Http\Controllers\RRHH;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RRHH\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
    	$e = Empleado::all();

    	return response()->json($e);
    }
}
