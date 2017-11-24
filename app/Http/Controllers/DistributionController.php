<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribution;

class distributionController extends Controller
{
    public function view($id)
    {
      $distribution=Distribution::find($id);
      return view('distribution.index',['reparticion'=>$distribution]);

    }
}
