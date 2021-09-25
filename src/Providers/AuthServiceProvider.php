<?php

namespace Wremon\Laralogs\Providers;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Wremon\Laralogs\Listeners\LogAuthenticationAttempt;
use Wremon\Laralogs\Listeners\LogSuccessfulLogin;
use Wremon\Laralogs\Listeners\LogSuccessfulLogout;

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
            Attempting::class,
            [LogAuthenticationAttempt::class, 'handle']
        );

        Event::listen(
            Login::class,
            [LogSuccessfulLogin::class, 'handle']
        );

        Event::listen(
            Logout::class,
            [LogSuccessfulLogout::class, 'handle']
        );
    }
}
