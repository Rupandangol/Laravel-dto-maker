<?php

namespace Rupandangol\LaravelClassMaker;

use Illuminate\Support\ServiceProvider;
use Rupandangol\LaravelClassMaker\Commands\MakeDtoCommand;
use Rupandangol\LaravelClassMaker\Commands\MakeEnumCommand;
use Rupandangol\LaravelClassMaker\Commands\MakeInterfaceCommand;
use Rupandangol\LaravelClassMaker\Commands\MakeServiceCommand;
use Rupandangol\LaravelClassMaker\Commands\MakeTraitCommand;

class ClassMakerServiceProvider extends ServiceProvider
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
                MakeTraitCommand::class,
                MakeServiceCommand::class,
                MakeEnumCommand::class,
                MakeInterfaceCommand::class,
            ]);
        }
    }
}
