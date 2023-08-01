<?php

namespace TmrwLife\NtakGuru\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TmrwLife\NtakGuru\NtakGuru
 */
class NtakGuru extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TmrwLife\NtakGuru\NtakGuru::class;
    }
}
