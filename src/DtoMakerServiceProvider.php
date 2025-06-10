<?php

namespace Rupandangol\LaravelDtoMaker;

use Illuminate\Support\ServiceProvider;
use Rupandangol\LaravelDtoMaker\Commands\MakeDtoCommand;

class DtoMakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeDtoCommand::class,
            ]);
        }
    }
}
