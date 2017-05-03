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
Use the ```seguce92:repos``` command to create your repository classes. This command will take as argument the repository class namesapce (from App) and
a ```--model``` option which allows you to specify the full namespace of the Eloquent model to which the repository will be tied.

```bash
$ php artisan seguce92:repos "Repositories\FooRepository" --class="Foo" --model="App\Models\Foo"
```
OR
```bash
$ php artisan seguce92:repos "Repositories\FooRepository" --c="Foo" --m="App\Models\Foo"
```

The above command will generate the following repository class in the ```app/Repositories``` directory:

--hashid  This option use if used hashid

### Creating a controller class
Use the ```seguce92:cont``` command to create your repository classes. This command will take as argument the repository class namesapce (from App) and
a ```--model``` option which allows you to specify the full namespace of the Eloquent model to which the repository will be tied.

```bash
$ php artisan seguce92:cont "Http\Controllers\FooController" --repository="App\Repositories\FooRepository" --model="foo"
```
OR
```bash
$ php artisan seguce92:cont "Http\Controllers\FooController" --r="App\Repositories\FooRepository" --m="foo"
```

The above command will generate the following repository class in the ```app/Http/Controllers``` directory:
