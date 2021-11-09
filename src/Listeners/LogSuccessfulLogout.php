<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Wremon\Laralogs\Laralogs;

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
        $laralogs = new Laralogs();

        $user->logs()
            ->save($laralogs->addLog('Logout'));
    }
}
