<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Wremon\Laralogs\Laralogs;

class LogSuccessfulLogin
{
    /**
     * The request.
     *
     * @var \Illuminate\Http\Request
     */
    public Request $request;

    /**
     * Create the event listener.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param Login $event
     * @return void
     */
    public function handle(Login $event)
    {
        $event->user->logs()->save(app(Laralogs::class)->addLog('Login'));
    }
}
