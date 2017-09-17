<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    // public function boot(GateContract $gate)
    // {
    //     $this->registerPolicies($gate);

    //     //
    // }

    /**
     * Register any application authentication / authorization services.
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
        $this->registerPolicies();

        //
    }
}
