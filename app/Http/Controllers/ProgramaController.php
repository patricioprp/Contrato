<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $programas = Programa::orderBy('id','ASC')->paginate(3);

      return view('admin.programa.index')->with('programas',$programas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $programa = new Programa($request->all());
      $programa->save();
      flash("Se creo el Programa " . $programa->nombre . " correctamente!")->success();
      return redirect(route('programa.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $programa=Programa::find($id);
      return view('admin.programa.edit')->with('programa',$programa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $programa=Programa::find($id);
      $programa->nombre=$request->nombre;
      $programa->save();
      flash("Se actualizo el Programa  " . $programa->nombre . " correctamente!")->warning();
       return redirect(route('programa.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

try {

  $programa=Programa::find($id);
  $programa->delete();
 flash("Se elimino el Programa  " . $programa->nombre . " correctamente!")->error();
  return redirect(route('programa.index'));

}catch (\Illuminate\Database\QueryException $e){
  flash("ATENCION!!! No es posible eliminar el Programa  " . $programa->nombre . " porque esta asociado a uno o mas Consultores")->error();
   return redirect(route('programa.index'));
}
    }

    public function view($id)
    {
      $programa=Programa::find($id);
      return view('programa.index',['programa'=>$programa]);
    }
}
