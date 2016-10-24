<?php

namespace Projeto\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Projeto\Repositories\CatalogacaoRepository::class, \Projeto\Repositories\CatalogacaoRepositoryEloquent::class);
        $this->app->bind(\Projeto\Repositories\ItemRepository::class, \Projeto\Repositories\ItemRepositoryEloquent::class);
        //:end-bindings:
    }
}
