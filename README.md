# melis-platform-framework-laravel-demo-tool-logic

Laravel module handling the request of melisplatform/melis-platform-framework-laravel-demo-tool
to display the list of data using a Database query with the Zend Database connection configuration 
and the Zend Service manager

### Prerequisites
The requirements for this module are:
 * melisplatform/melis-platform-framework-laravel-demo-tool 
 * melisplatform/melis-platform-framework-laravel
 
It will automatically be done when using composer.

### Installing
```
composer require melisplatform/melis-platform-framework-laravel-demo-tool-logic
```

### Route
This module handles a single route. See Routes/web.php
```
Route::get('/list', 'IndexController@list');
```
