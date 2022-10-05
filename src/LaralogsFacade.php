<?php

namespace Wremon\Laralogs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wremon\Laralogs\Laralogs
 */
class LaralogsFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laralogs';
    }
}
