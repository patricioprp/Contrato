<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Distribution;

class distributionController extends Controller
{

    public function index()
    {
      $reparticiones = Distribution::orderBy('id','ASC')->paginate(10);

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
      //return view('admin.distribution.index');
      flash("Se creo la Reparticion " . $reparticion->nombre . " correctamente!")->success();
      return redirect(route('distribution.index'));

    }
    public function destroy($id)
    {

        try {

          $reparticion=Distribution::find($id);
          $reparticion->delete();
          flash("Se elimino la reparticion  " . $reparticion->nombre . " correctamente!")->error();
           return redirect(route('distribution.index'));
}catch (\Illuminate\Database\QueryException $e){
flash("ATENCION!!! No es posible eliminar la reparticion  " . $reparticion->nombre . " porque esta asociado a uno o mas Consultores")->error();
return redirect(route('distribution.index'));
}

    }

    public function edit($id)
    {
        $reparticion=Distribution::find($id);
        return view('admin.distribution.edit')->with('reparticion',$reparticion);
    }

    public function update(Request $request, $id)
    {
        $reparticion=Distribution::find($id);
        $reparticion->nombre=$request->nombre;
        $reparticion->save();
        flash("Se actualizo la Reparticion  " . $reparticion->nombre . " correctamente!")->warning();
         return redirect(route('distribution.index'));

    }
}
