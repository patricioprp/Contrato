<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Contrato;
use App\Comision;
class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $comisiones = Comision::orderBy('id','ASC')->paginate(10);
      return view('admin.comision.index')->with('comisiones',$comisiones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         $contrato = Contrato::find($id);
          return view('admin.comision.create')->with('contrato',$contrato);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->all());
      $comision = new Comision($request->all());
      //Para que las fechas se guarden en la db en el formato Y-m-d
        $comision->desde= \Carbon\Carbon::parse($comision->desde)->format('Y-m-d');
        $comision->hasta= \Carbon\Carbon::parse($comision->hasta)->format('Y-m-d');
        $contrato = Contrato::find($request->id);
        $contrato->comisions()->save($comision);
        flash("Se creo la Comision correctamente!")->success();
        return redirect(route('contrato.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $contrato=Contrato::find($id);
      return view('admin.comision.show')->with('contrato',$contrato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $comision=Comision::find($id);
      return view('admin.comision.edit')->with('comision',$comision);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      try {
      $comision=Comision::find($id);
      $comision->fill($request->all());
      $comision->desde= \Carbon\Carbon::parse($comision->desde)->format('Y-m-d');
      $comision->hasta= \Carbon\Carbon::parse($comision->hasta)->format('Y-m-d');
      $comision->save();
      flash("Se actualizo la Comision correctamente!")->warning();
       return redirect(route('contrato.index'));
       }catch (\Illuminate\Database\QueryException $e){
         flash("ATENCION!!! NO SE EDITO EL COMISION N°: ".$comision->id.".  Ingrese un valor para el campo ESTADO(activo,proximo o finalizado) " )->error();
          return redirect(route('contrato.index'));
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $comision=Comision::find($id);
      $comision->delete();
     flash("Se elimino el Comision correctamente!")->error();
      return redirect(route('comision.index'));
    }
}
