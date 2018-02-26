<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Contrato;
class correo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'correo:enviar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'envia correo con el vencimiento de los contratos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $contratos = Contrato::all();

         foreach ($contratos as $contrato)
         {
        //SETEANDO INDICADOR    
        $fechaActual = Carbon::now();
        $fechaHasta = Carbon::parse($contrato->hasta);
        $diasDiferencia = $fechaHasta->diffInDays($fechaActual);
        $contrato->indicador=$diasDiferencia;
        //SETEANDO DURACION
        $mesDesde = Carbon::parse($contrato->desde);
        $mesHasta = Carbon::parse($contrato->hasta);
        $mesesDiferencia = $mesHasta->diffinDays($mesDesde);
        $contrato->duracion = $mesesDiferencia;

        //volver a consultar las fechas para los estados
        if($contrato->indicador < 16)
        {
            $contrato->estado="proximo";
        }
        else
            if($contrato->indicador>15)
            {
                $contrato->estado="activo";
            }
            else
                if($fechaActual>\Carbon\Carbon::parse($contrato->hasta)->format('d-m-Y'))
                {
                    $contrato->estado="finalizado";
                    $contrato->indicador=0;
                }

        $contrato->save();
        }
         
    }
}
