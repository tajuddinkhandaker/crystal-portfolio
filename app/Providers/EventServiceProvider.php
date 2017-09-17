<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    // public function boot(DispatcherContract $events)
    // {
    //     parent::boot($events);

    //     //
    // }

    /**
     * Register any other events for your application.
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
        parent::boot();

        //
    }
}
