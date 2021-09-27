<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Wremon\Laralogs\Models\Log;

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
        $user = $event->user;
        $ip = $this->request->ip();

        $log = new Log([
            'source' => config('laralogs.source'),
            'event' => 'Login',
            'ip_address' => \request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        $user->logs()->save($log);
    }
}
