<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class StarterInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starter:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Trigger to start the installation process. Please be careful in triggering this command.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate');
        Artisan::call('db:seed');
        Artisan::call('key:generate');
        Artisan::call('shield:super-admin');
    }
}
