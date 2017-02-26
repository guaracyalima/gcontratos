<?php

namespace App\Providers;


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
        $this->app->bind(
            'App\Repositories\CarnesRepository',
            'App\Repositories\CarnesRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ProdutosRepository',
            'App\Repositories\ProdutosRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ClientesRepository',
            'App\Repositories\ClientesRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\PagamentosRepository',
            'App\Repositories\PagamentosRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ContratosRepository',
            'App\Repositories\ContratosRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\CategoriasRepository',
            'App\Repositories\CategoriasRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\DespesasRepository',
            'App\Repositories\DespesasRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ReceitasRepository',
            'App\Repositories\ReceitasRepositoryEloquent'
        );

        $this->app->bind(
            'App\Repositories\ParcelasRepository',
            'App\Repositories\ParcelasRepositoryEloquent'
        );
    }
}
