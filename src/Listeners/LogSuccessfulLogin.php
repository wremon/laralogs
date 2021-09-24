<?php

namespace Wremon\Laralogs\Listeners;


use Wremon\Laralogs\Providers\AuthServiceProvider;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  AuthServiceProvider  $event
     * @return void
     */
    public function handle(AuthServiceProvider $event)
    {

        dd('HELLO');
    }
}
