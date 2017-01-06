<?php


namespace KevinEm\NonprofitExplorerLaravel;


use Illuminate\Support\ServiceProvider;
use KevinEm\NonprofitExplorerPHP\NonprofitExplorer;

class NonprofitExplorerServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('nonprofit-explorer', $this->createNonprofitExplorerClosure());
    }

    /**
     * @return \Closure
     */
    protected function createNonprofitExplorerClosure()
    {
        return function ($app) {
            return new NonprofitExplorer();
        };
    }
}