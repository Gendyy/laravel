<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class projectInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init a fresh version of the project';

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
       
        $this->call('migrate:refresh');
        $this->call('db:seed');
        $this->call('config:clear');
        $this->call('cache:clear');

    }
}
