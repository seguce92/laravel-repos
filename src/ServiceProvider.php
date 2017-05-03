<?php

namespace Seguce92\LaravelRepos;

use Illuminate\Support\ServiceProvider as BaseProvider;

class ServiceProvider extends BaseProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Make sure we are running in console
        if ($this->app->runningInConsole()) {
            // Register Commands.
            $this->commands([
                Console\RepositoryCommand::class,
                Console\ControllerCommand::class,
            ]);
        }

        //$this->bootRepositories();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot Repositories when resolving them.
     *
     * @return void
     */
    protected function bootRepositories()
    {
        $this->app->resolving(function ($repo) {
            // This is a repo.
            if ($repo instanceof Repository) {
                // Boot the Repository.
                $repo->boot();
            }

            if ($repo instanceof Controller) {
                // Boot the Repository.
                $repo->boot();
            }
        });
    }
}
