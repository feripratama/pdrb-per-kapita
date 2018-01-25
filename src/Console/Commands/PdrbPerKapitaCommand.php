<?php namespace Bantenprov\PdrbPerKapita\Console\Commands;

use Illuminate\Console\Command;

/**
 * The PdrbPerKapitaCommand class.
 *
 * @package Bantenprov\PdrbPerKapita
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PdrbPerKapitaCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:pdrb-per-kapita';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\PdrbPerKapita package';

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
        $this->info('Welcome to command for Bantenprov\PdrbPerKapita package');
    }
}
