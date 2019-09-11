# melis-platform-framework-laravel-demo-tool-logic

Laravel module handling the request of ``melisplatform/melis-platform-framework-laravel-demo-tool``
to display the list of data using a Database query with the Zend Database connection configuration 
and the Zend Service manager

### Prerequisites
The requirements for this module are:
 * melisplatform/melis-platform-framework-laravel-demo-tool 
 * melisplatform/melis-platform-framework-laravel
 
It will automatically be done when using composer.

### Installing
Before installing this package, this required to create first the **Laravel** skeleton in ``/thirdparty/Laravel``,
then let Composer class mapping to be added to the autoloader, otherwise composer will interrupted 
an error message on your command line and stop the current execution.
```
"autoload": {
    ...
    "classmap": [
      "../../../thirdparty/Laravel/database/seeds",
      "../../../thirdparty/Laravel/database/factories"
    ]
  }
```
Once it done, you can now run the following composer command:
   
```
composer require melisplatform/melis-platform-framework-laravel-demo-tool-logic
```
### Service Providers
Activating the Service provider by just adding to the ``config/app.php`` file in the 
Service Providers section.
```
MelisPlatformFrameworkLaravelDemoToolLogic\ModuleServiceProvider::class
```

### Route
This module handles a single route. See ``Routes/web.php``
```
Route::get('/melis/laravel-list', 'IndexController@list');
```

## Authors

* **Melis Technology** - [www.melistechnology.com](https://www.melistechnology.com/)

See also the list of [contributors](https://github.com/melisplatform/melis-core/contributors) who participated in this project.


## License

This project is licensed under the OSL-3.0 License - see the [LICENSE.md](LICENSE.md) file for details
