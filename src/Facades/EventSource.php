<?php

declare(strict_types=1);

namespace PurwantoId\EventSource\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PurwantoId\EventSource\EventSource
 */
class EventSource extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PurwantoId\EventSource\EventSource::class;
    }
}
