<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
    protected $description = 'envia los correos';

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
        echo "string";
    }
}