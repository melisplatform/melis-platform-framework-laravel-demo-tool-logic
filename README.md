# melis-platform-framework-laravel-demo-tool-logic

Laravel module that handle the request of melisplatform/melis-platform-framework-laravel-demo-tool
to display the list of data using a Database query with the Zend Database connection configuration 
and the Zend Service manager

### Prerequisites
This module requires below in order to have this module running.
 * melisplatform/melis-platform-framework-laravel-demo-tool 
 * melisplatform/melis-platform-framework-laravel
 
This will automatically be done when using composer.

### Installing
```
composer require melisplatform/melis-platform-framework-laravel-demo-tool-logic
```

### Route
This module handle a single route. See Routes/web.php
```
Route::get('/list', 'IndexController@list');
```