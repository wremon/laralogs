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
        $model = config('laralogs.user_model');
        $userColumn = config('laralogs.user_column');
        $userId = $model::where($userColumn, $event->credentials[$userColumn])->value('id');

        if ($userId) {
            $model->logs()->save(app(Laralogs::class)->addLog('Attempting'));
        }
    }
}
