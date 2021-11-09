<?php

namespace Wremon\Laralogs;

use UAParser\Parser;
use Wremon\Laralogs\Models\Log;

class Laralogs
{
    function addLog($event)
    {
        /**
         * Create a new log entry
         *
         * @returns Log
         */
        return new Log([
            'source' => config('laralogs.source'),
            'event' => $event,
            'ip_address' => \request()->ip(),
            'user_agent' => request()->userAgent(),
            'browser' => $this->getBrowser(),
        ]);
    }

    /**
     * Parse and return the user agent
     *
     * @return string
     * @throws \UAParser\Exception\FileNotFoundException
     */
    function getBrowser()
    {
        $parser = Parser::create();
        $userAgent = $parser->parse(request()->userAgent());

        return $userAgent->ua->family . ' ' . $userAgent->ua->major . ' on ' . $userAgent->os->family;
    }
}
