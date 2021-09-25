<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Wremon\Laralogs\Models\Log;

class LogSuccessfulLogout
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
     * @param Logout $event
     * @return void
     */
    public function handle(Logout $event)
    {
        $user = $event->user;

        $log = new Log([
            'source' => config('laralogs.source'),
            'event' => 'Logout',
            'ip_address' => \request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);

        $user->logs()->save($log);
    }
}
