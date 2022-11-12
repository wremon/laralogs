<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Http\Request;
use Wremon\Laralogs\Laralogs;

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
     * @param  Attempting  $event
     * @return void
     */
    public function handle(Attempting $event)
    {
        $user = config('laralogs.user_model', '\App\Models\User');
        $userColumn = config('laralogs.user_column', 'email');
        $userId = $user::where($userColumn, $event->credentials[$userColumn])->value('id');

        if (! $userId) {
            return;
        }

        $user = $user::find($userId);

        if (! $user) {
            return;
        }

        $laralogs = new Laralogs();
        $user->logs()->save($laralogs->addLog('Attempting'));
    }
}
