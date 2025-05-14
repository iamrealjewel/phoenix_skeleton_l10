<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeSRI extends Command
{
    protected $signature = 'make:sri {name}';

    protected $description = 'Generate service, repository, and interface files for a model';

    public function handle()
    {
        $modelName = $this->argument('name');

        // Generate service
        $this->generateService($modelName);

        // Generate repository interface
        $this->generateRepositoryInterface($modelName);

        // Generate repository
        $this->generateRepository($modelName);

        $this->info('Service, repository, and interface files for ' . $modelName . ' created successfully.');
    }

    private function generateService($modelName)
    {
        $serviceContent = '<?php

namespace App\Services;

use App\Repositories\\' . $modelName . 'Repository;

class ' . $modelName . 'Service
{
    protected $' . lcfirst($modelName) . 'Repository;

    public function __construct(' . $modelName . 'Repository $' . lcfirst($modelName) . 'Repository)
    {
        $this->' . lcfirst($modelName) . 'Repository = $' . lcfirst($modelName) . 'Repository;
    }
}
';

        File::put(app_path('Services/' . $modelName . 'Service.php'), $serviceContent);
    }

    private function generateRepositoryInterface($modelName)
    {
        $repositoryInterfaceContent = '<?php

namespace App\Interfaces;

interface ' . $modelName . 'RepositoryInterface
{
    // Add interface methods here
}
';

        File::put(app_path('Interfaces/' . $modelName . 'RepositoryInterface.php'), $repositoryInterfaceContent);
    }

    private function generateRepository($modelName)
    {
        $repositoryContent = '<?php

namespace App\Repositories;

use App\Interfaces\\' . $modelName . 'RepositoryInterface;
use App\Models\\' . $modelName . ';

class ' . $modelName . 'Repository implements ' . $modelName . 'RepositoryInterface
{
    protected $' . lcfirst($modelName) . ';

    public function __construct(' . $modelName . ' $' . lcfirst($modelName) . ')
    {
        $this->' . lcfirst($modelName) . ' = $' . lcfirst($modelName) . ';
    }
}
';

        File::put(app_path('Repositories/' . $modelName . 'Repository.php'), $repositoryContent);
    }
}
