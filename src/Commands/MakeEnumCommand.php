<?php

namespace Rupandangol\LaravelClassMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeEnumCommand extends Command
{
    protected $signature = 'make:enum {name}';
    protected $description = 'Create a new Enum';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Enums/{$name}.php");

        if (File::exists($path)) {
            $this->error("Enums {$name} already exists!");
            return;
        }

        if (!File::exists(app_path('Enums'))) {
            File::makeDirectory(app_path('Enums'));
        }

        $content = "<?php
namespace App\Enums;

enum {$name}: string
{
    //case EXAMPLE='example'
}";

        File::put($path, $content);
        $this->info("Enums {$name} created at app/Enums/{$name}.php");
    }
}
