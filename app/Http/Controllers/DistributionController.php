<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distribution;

class distributionController extends Controller
{

    public function index()
    {
      $reparticiones = Distribution::orderBy('nombre','ASC')->paginate(3);

      return view('admin.distribution.index')->with('reparticiones',$reparticiones);

    }

    public function view($id)
    {
      $distribution=Distribution::find($id);
      return view('distribution.index',['reparticion'=>$distribution]);

    }

    public function create()
    {
      return view('admin.distribution.create');
    }

    public function store(Request $request)
    {

      $reparticion = new Distribution($request->all());
      $reparticion->save();
      return view('admin.distribution.index');
          }
}
