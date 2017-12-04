<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class TestController extends Controller
{
    public function view($id)
    {
        $empleado = Empleado::find($id);


        return view('test.index')->withEmpleado($empleado);
    }
}
