<?php

namespace Wremon\Laralogs\Listeners;

use Illuminate\Auth\Events\Login;
use Wremon\Laralogs\Models\Log;

class LogSuccessfulLogin
{
    /**
     * Handle the event.
     *
     * @param Login $login
     * @return void
     */
    public function handle(Login $login)
    {
        Log::create([
            'user_id' => $login->user->id,
            'user' => $login->user->email,
            'detail' => 'Login Success',
            'ip_address' => \request()->ip(),
        ]);
    }
}
