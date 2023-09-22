<?php

namespace Jibon\Jobs;

use Illuminate\Support\ServiceProvider;

class JobServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'Job');
        $this->publishes([
            __DIR__.'/database/migrations/2014_10_12_000000_create_jobs_table.php' =>
            $this->app->databasePath(
                'database/migrations'. now()->format('Y_m_d_His').'_create_jobs_table.php'
            ),
            __DIR__.'/database/migrations/2014_10_12_000001_create_job_users_table.php' =>
            $this->app->databasePath(
                'database/migrations'. now()->format('Y_m_d_His').'_create_job_users_table.php'
            ),

        ], 'migrations');
    }

    public function register()
    {

    }

}