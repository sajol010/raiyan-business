<?php

namespace App\Facades;

use App\Services\UnionService;
use Illuminate\Support\Facades\Facade;

class UnionFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return UnionService::class;
    }
}
