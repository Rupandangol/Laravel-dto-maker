<?php

namespace Rupandangol\LaravelDtoMaker\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeDtoCommand extends Command
{
    protected $signature = 'make:dto {name}';
    protected $description = 'Create a new DTO class';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("DTOs/{$name}.php");

        if (File::exists($path)) {
            $this->error("DTO {$name} already exists!");
            return;
        }

        if (!File::exists(app_path('DTOs'))) {
            File::makeDirectory(app_path('DTOs'));
        }

        $content = "<?php

        namespace App\DTOs;

        class {$name}
        {
            //
        }";

        File::put($path, $content);
        $this->info("DTO {$name} created at app/DTOs/{$name}.php");
    }
}
