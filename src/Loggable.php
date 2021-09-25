<?php

namespace Wremon\Laralogs;

use Wremon\Laralogs\Models\Log;

trait Loggable
{
    /**
     * Get the model logs.
     */
    public function logs()
    {
        return $this->morphMany(Log::class, 'authenticatable')->latest('created_at');
    }

    /**
     * Get the model's last login.
     */
    public function lastLoginAt()
    {
        return optional($this->logs()->first())->created_at;
    }

    /**
     * Get the model's last login's ip address.
     */
    public function lastLoginIp()
    {
        return optional($this->logs()->first())->ip_address;
    }

    /**
     * Get the model's previous login at.
     */
    public function previousLoginAt()
    {
        return optional($this->logs()->skip(1)->first())->created_at;
    }

    /**
     * Get the model's previous login ip.
     */
    public function previousLoginIp()
    {
        return optional($this->logs()->skip(1)->first())->ip_address;
    }
}
