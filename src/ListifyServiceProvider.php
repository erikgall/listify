<?php

namespace EGALL\Listify;

use Illuminate\Support\ServiceProvider;
use EGALL\Listify\Console\Commands\AttachCommand;

/**
 * Listify service provider.
 *
 * @author Erik Galloway <egalloway@claruscare.com>
 */
class ListifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([AttachCommand::class]);
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
    }
}
