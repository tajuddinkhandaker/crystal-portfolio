<?php

namespace App\Providers;

// use Illuminate\Routing\Router;
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
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    // public function boot(Router $router)
    // {
    //     //

    //     parent::boot($router);
    // }


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     * @remarks You may remove the arguments from the boot method on the EventServiceProvider, RouteServiceProvider, and AuthServiceProvider 
     * classes. Any calls to the given arguments may be converted to use the equivalent facade instead. So, for example, instead of calling 
     * methods on the $dispatcher argument, you may simply call the Event facade. Likewise, instead of making method calls to the $router 
     * argument, you may make calls to the Route facade, and instead of making method calls to the $gate argument, you may make calls to the Gate 
     * facade.
     * When converting method calls to facades, be sure to import the facade class into your service provider.
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

        //
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
