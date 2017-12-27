<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;
use App\Empleado;
use App\Http\Requests\ContratoRequest;
use Maatwebsite\Excel\Facades\Excel;
class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contratos = Contrato::orderBy('id','ASC')->paginate(3);

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
      $contrato=Contrato::find($id);
      $contrato->fill($request->all());
      $contrato->save();
      flash("Se actualizo el Contrato  " . $contrato->id. ",".$contrato->tipo." correctamente!")->warning();
       return redirect(route('contrato.index'));
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
    public function excel()
    {
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
        **/
        Excel::create('Contratos Excel', function($excel) {
            $excel->sheet('Contratos sheet', function($sheet) {
                //otra opción -> $products = Product::select('nombre')->get();
              //  $contrato = Contrato::all();
              $contratos = Contrato::join('empleados', 'empleados.id', '=', 'contratos.id')
              ->select(
              'contratos.id',
              \DB::raw("concat(empleados.nombre, ' ', empleados.apellido) as `Nombre`"),
              'empleados.dni',
              'contratos.fondos_origen',
              'contratos.indicador',
              'contratos.monto',
              'contratos.duracion',
              'contratos.estado',
              'contratos.tipo',
              'contratos.actividad',
              'contratos.desde',
              'contratos.hasta')
              ->get();
                $sheet->fromArray($contratos);
                $sheet->setOrientation('landscape');
            });
        })->export('xls');
    }
}
