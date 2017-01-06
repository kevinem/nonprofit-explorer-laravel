<?php


namespace KevinEm\NonprofitExplorerLaravel\Facades;


use Illuminate\Support\Facades\Facade;

class NonprofitExplorer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'nonprofit-explorer';
    }
}