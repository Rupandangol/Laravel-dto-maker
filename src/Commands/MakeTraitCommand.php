<?php

namespace Rupandangol\LaravelClassMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeTraitCommand extends Command
{
    protected $signature = 'make:trait {name}';
    protected $description = 'Create a new Trait';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Traits/{$name}.php");

        if (File::exists($path)) {
            $this->error("Trait {$name} already exists!");
            return;
        }

        if (!File::exists(app_path('Traits'))) {
            File::makeDirectory(app_path('Traits'));
        }

        $content = "<?php
namespace App\Traits;

trait {$name}
{
    //
}";

        File::put($path, $content);
        $this->info("Trait {$name} created at app/Traits/{$name}.php");
    }
}
