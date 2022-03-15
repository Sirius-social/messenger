<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class DashboardResource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dashboard:resource {model?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * @var string
     */
    protected $modelName;

    /**
     * @var string
     */
    protected $modelPath;

    /**
     * @var string
     */
    protected $table;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->createController();
        $this->createRequests();
        $this->copyViewsStubs();
        $this->alert('Controller {'.$this->getControllerName().'} created, store and update requests created and views files copied to the {'.$this->getViewsDirectory().'} directory.');
    }

    /**
     * Set global variable modelPath.
     *
     * @return void
     */
    protected function setModelPath()
    {
        $this->modelPath = 'App\\Models\\'.$this->modelName;
    }

    /**
     * Set global variable modelName.
     *
     * @return void
     */
    protected function setModelName()
    {
        $this->modelName = $this->argument('model') ?? $this->ask(__('Please provide model name.'));
    }

    /**
     * Set global table variable.
     *
     * @return void
     */
    protected function setTable()
    {
        $this->table = $this->getModelClass() ? $this->getModelClass()->getTable() : false;
    }

    /**
     * Get model class from global variable.
     *
     * @return \Illuminate\Database\Eloquent\Model|false
     */
    protected function getModelClass()
    {
        $this->setModelPath();
        return class_exists($this->modelPath) ? new $this->modelPath : false;
    }

    /**
     * Get controller name.
     *
     * @return string
     */
    protected function getControllerName()
    {
        $this->setModelName();
        return 'Dashboard/'.$this->modelName.'Controller';
    }

    /**
     * Get views directory.
     *
     * @return string
     */
    protected function getViewsDirectory()
    {
        $this->setTable();
        return 'resources/views/dashboard/'.$this->table;
    }

    /**
     * Create store and update requests.
     *
     * @return void
     */
    protected function createRequests()
    {
        $this->call('make:request', ['name' => 'Dashboard/'.$this->modelName.'/'.$this->modelName.'StoreRequest']);
        $this->call('make:request', ['name' => 'Dashboard/'.$this->modelName.'/'.$this->modelName.'UpdateRequest']);
    }

    /**
     * Create controller to this model.
     *
     * @return void
     */
    protected function createController()
    {
        $this->call('make:controller', ['name' => $this->getControllerName(),'--resource' => true]);
    }

    /**
     * Copy views stubs to the resource/views directory.
     *
     * @return void
     */
    protected function copyViewsStubs()
    {
        $this->files->ensureDirectoryExists(base_path($this->getViewsDirectory()));
        $this->files->copyDirectory(__DIR__.'/../../../stubs/views', base_path($this->getViewsDirectory()));
    }
}
