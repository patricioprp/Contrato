<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;
use App\Empleado;
use App\Http\Requests\ContratoRequest;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $contratos = Contrato::search($request->estado)->orderBy('id','ASC')->paginate(3);
    //$contratos->desde->toFormattedDateString();

      return view('admin.contrato.index')->with('contratos',$contratos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $empleados = Empleado::all()->pluck('full','id');
      //dd($empleados[0]->full);

        return view('admin.contrato.create')->with('empleados',$empleados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContratoRequest $request)
    {
      $contrato = new Contrato($request->all());
      $empleado = Empleado::find($request->empleado);
      $empleado->contratos()->save($contrato);
      //$contrato->save();
    /*  $contrato->empleado()->sync($request->empleados);*/
    //$contrato->empleado()->associate($request->empleados);

      flash("Se creo el Contrato # " . $contrato->id . " correctamente!")->success();
      //return view('admin.contrato.index');
      return redirect(route('contrato.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=Empleado::all()->pluck('full','id');
        $contrato=Contrato::find($id);
        $contrato->empleado;//esta linea permite cargar las relaciones para que aparezcan los valores de los campos de los select antes de editarlos
        return view('admin.contrato.edit')->with('contrato',$contrato)->with('empleado',$empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(ContratoRequest $request, $id)
    {
      try {
      $contrato=Contrato::find($id);
      $contrato->fill($request->all());
      $empleado = Empleado::find($request->empleado);
      $empleado->contratos()->save($contrato);
      $contrato->save();
      flash("Se actualizo el Contrato  " . $contrato->id. ",".$contrato->tipo." correctamente!")->warning();
       return redirect(route('contrato.index'));
       }catch (\Illuminate\Database\QueryException $e){
         flash("ATENCION!!! NO SE EDITO EL CONTRATO N°: ".$contrato->id.".  Ingrese un valor para el campo ESTADO(activo,proximo o finalizado) " )->error();
          return redirect(route('contrato.index'));
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $contrato=Contrato::find($id);
      flash("Se elimino el Contrato  " . $contrato->id.",".$contrato->tipo. " correctamente!")->error();
      $contrato->forceDelete();
      return redirect(route('contrato.index'));
    }
    public function excel(Request $request)
    {

        Excel::create('Contratos Excel', function($excel) {
            $excel->sheet('Contratos sheet', function($sheet) {
              $contratos = Contrato::join('empleados', 'empleados.id', '=', 'contratos.empleado_id')
              ->join('programas','empleados.programa_id', '=', 'programas.id')
              ->where('estado', \Request::input('estado'))
              ->select(
              'contratos.id as Numero de Contrato',
              \DB::raw("concat(empleados.nombre, ' ', empleados.apellido) as `Nombre del Consultor`"),
              'empleados.dni as DNI',
              'programas.nombre as Programa',
              'contratos.fondos_origen as Fondos de Origen',
              'contratos.indicador as Indicador(Dias Restantes)',
              'contratos.monto as Monto($)',
              'contratos.duracion as Duracion(Meses)',
              'contratos.estado as Estado',
              'contratos.tipo as Tipo',
              'contratos.actividad as Actividad',
              'contratos.desde as Desde',
              'contratos.hasta as Hasta')
              ->get();
                $sheet->fromArray($contratos);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }
}
