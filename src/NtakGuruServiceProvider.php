<?php

namespace TmrwLife\NtakGuru;

use Illuminate\Support\ServiceProvider;

class NtakGuruServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadRoutesFrom(dirname(__DIR__).'/routes/api.php');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(dirname(__DIR__).'/database/migrations');

            $this->publishes([
                dirname(__DIR__).'/database/migrations' => database_path('migrations'),
            ], 'ntakguru-migrations');

            $this->publishes([
                dirname(__DIR__).'/config/ntakguru.php' => config_path('ntakguru.php'),
            ], 'ntakguru-config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(dirname(__DIR__).'/config/ntakguru.php', 'ntakguru');
    }
}
