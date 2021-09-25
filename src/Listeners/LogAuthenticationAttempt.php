<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Wremon\Laralogs\Models\Log;

class LogAuthenticationAttempt
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
     * @param Attempting $event
     * @return void
     */
    public function handle(Attempting $event)
    {
        $user = $event->user;

        $log = new Log([
            'source' => config('laralogs.source'),
            'event' => 'Attempting',
            'ip_address' => \request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        $user->logs()->save($log);
    }
}
