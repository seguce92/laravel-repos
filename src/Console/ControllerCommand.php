<?php

namespace Seguce92\LaravelRepos\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class ControllerCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'seguce92:cont';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new controller class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Controller';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        // Return repository stub.
        return __DIR__.'/stubs/controller.stub';
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param string $stub
     * @param string $name
     *
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $stub = str_replace(
            ['DummyNamespace', 'DummyRepository', 'DummyModel', 'DummyController'],
            [$this->getNamespace($name), $this->option('repository'), strtolower($this->option('model')), ucfirst($this->option('model'))],
            $stub
        );

        return $this;
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['repository', 'r', InputOption::VALUE_REQUIRED, 'Generate the repository implicit binding.example[App\Repositories\FooRepository]'],
            ['model', 'm', InputOption::VALUE_REQUIRED, 'Generate with model binding. example[foo]'],
        ];
    }
}
