<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class InitData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Recupération et stockage des données de l'API dans la base de de données";

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
     * @return int
     */
    public function handle()
    {
        Log::info("Début Récupération");

        Log::info("Fin Récupération");
        return Command::SUCCESS;
    }
}
