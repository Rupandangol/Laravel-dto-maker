<?php

namespace Rupandangol\LaravelClassMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeInterfaceCommand extends Command
{
    protected $signature = 'make:interface {name}';
    protected $description = 'Create a new Interface';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Interfaces/{$name}.php");

        if (File::exists($path)) {
            $this->error("Interface {$name} already exists!");
            return;
        }

        if (!File::exists(app_path('Interfaces'))) {
            File::makeDirectory(app_path('Interfaces'));
        }

        $content = "<?php
namespace App\Interfaces;

interface {$name}
{
    //public function example();
}";

        File::put($path, $content);
        $this->info("Interface {$name} created at app/Interfaces/{$name}.php");
    }
}
