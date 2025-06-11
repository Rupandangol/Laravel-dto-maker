<?php

namespace Rupandangol\LaravelClassMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeServiceCommand extends Command
{
    protected $signature = 'make:service {name}';
    protected $description = 'Create a new Service class';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Services/{$name}.php");

        if (File::exists($path)) {
            $this->error("Services {$name} already exists!");
            return;
        }

        if (!File::exists(app_path('Services'))) {
            File::makeDirectory(app_path('Services'));
        }

        $content = "<?php
namespace App\Services;

class {$name}
{
    //
}";

        File::put($path, $content);
        $this->info("Services {$name} created at app/Services/{$name}.php");
    }
}
