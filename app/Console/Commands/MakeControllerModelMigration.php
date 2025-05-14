<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeControllerModelMigration extends Command
{
    protected $signature = 'make:cmm {name}';

    protected $description = 'Generate a controller, model, and migration in one command';

    public function handle()
    {
        $name = $this->argument('name');

        // Generate model and migration
        $this->call('make:model', ['name' => $name, '-m' => true]);

        // Generate resource controller
        $this->call('make:controller', ['name' => $name . 'Controller', '--resource' => true]);

        $this->info('Resource controller, model, and migration created successfully.');
    }
}
