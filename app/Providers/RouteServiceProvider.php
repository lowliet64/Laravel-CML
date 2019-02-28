<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapAtendenteRoutes();

        $this->mapFuncionarioRoutes();

        $this->mapMedicoRoutes();

        $this->mapGerenteRoutes();

        //
    }

    /**
     * Define the "gerente" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapGerenteRoutes()
    {
        Route::group([
            'middleware' => ['web', 'gerente', 'auth:gerente'],
            'prefix' => 'gerente',
            'as' => 'gerente.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/gerente.php');
        });
    }

    /**
     * Define the "medico" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapMedicoRoutes()
    {
        Route::group([
            'middleware' => ['web', 'medico', 'auth:medico'],
            'prefix' => 'medico',
            'as' => 'medico.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/medico.php');
        });
    }

    /**
     * Define the "funcionario" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapFuncionarioRoutes()
    {
        Route::group([
            'middleware' => ['web', 'funcionario', 'auth:funcionario'],
            'prefix' => 'funcionario',
            'as' => 'funcionario.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/funcionario.php');
        });
    }

    /**
     * Define the "atendente" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapAtendenteRoutes()
    {
        Route::group([
            'middleware' => ['web', 'atendente', 'auth:atendente'],
            'prefix' => 'atendente',
            'as' => 'atendente.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/atendente.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
