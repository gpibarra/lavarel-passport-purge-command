<?php

namespace gpibarra\LavarelPassportPurgeCommand;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LavarelPassportPurgeCommandServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            app\Console\Commands\PurgeOldTokensCommand::class,
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
