<?php

namespace Wremon\Laralogs\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Wremon\Laralogs\Listeners\LogSuccessfulLogin;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            Login::class,
            [LogSuccessfulLogin::class, 'handle']
        );
    }
}
