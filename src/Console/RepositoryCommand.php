<?php

namespace Seguce92\LaravelRepos\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class RepositoryCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'seguce92:repos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Repository class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repository';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        // Check if annotated option is
        // activated and if so
        // use annotated stub
        if ($this->option('hashid')) {
            return __DIR__.'/stubs/repository_hashid.stub';
        }

        // Return repository stub.
        return __DIR__.'/stubs/repository.stub';
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
            ['DummyNamespace', 'DummyModelLower', 'DummyModel'],
            [$this->getNamespace($name), strtolower($this->option('class')), $this->option('model')],
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
            ['class', 'c', InputOption::VALUE_REQUIRED, 'Generate the repository class for the given model. example[User]'],
            ['model', 'm', InputOption::VALUE_REQUIRED, 'Generate the repository model name. example[App\User].'],
            ['hashid', 'i', InputOption::VALUE_NONE, 'Generate a repository using hashid.'],
        ];
    }
}
