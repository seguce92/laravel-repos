### Installation
Install LaravelRepos as you would with any other dependency managed by Composer:

```bash
$ composer require seguce92/laravel-repos
```

### Configuration
After installing repo all you need is to register the ```Seguce92\LaravelRepos\ServiceProvider``` in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    Seguce92\LaravelRepos\ServiceProvider::class,
],
```

### Creating a repository class
Use the ```repos:make``` command to create your repository classes. This command will take as argument the repository class namesapce (from App) and
a ```--model``` option which allows you to specify the full namespace of the Eloquent model to which the repository will be tied.

```bash
$ php artisan repos:make "Repositories\FooRepository" --model="App\Models\Foo"
```

The above command will generate the following repository class in the ```app/Repositories``` directory:

### Creating a controller class
Use the ```control:make``` command to create your repository classes. This command will take as argument the repository class namesapce (from App) and
a ```--model``` option which allows you to specify the full namespace of the Eloquent model to which the repository will be tied.

```bash
$ php artisan repos:make "FooController" --repository="App\Repositories\FooRepository" --model="foo"
```

The above command will generate the following repository class in the ```app/Http/Controllers``` directory:
