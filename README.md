# Cachebusting



Easy and useful tool to change version of file if it modified  for laravel 4 .




## Installation

### Composer

Add Laravel Cachebusting to your `composer.json` file.

    "maherelgamil/cachebusting": "dev-master"

Run `composer install` to get the latest version of the package.


### Manually

It's recommended that you use Composer, however you can download and install from this repository.

### Laravel 4

Cachebusting comes with a service provider for Laravel 4. You'll need to add it to your `composer.json` as mentioned in the above steps, then register the service provider with your application.

Open `app/config/app.php` and find the `providers` key. Add `Cachebusting\CachebustingServiceProvider` to the array.

```php
	...
	'Maherelgamil\Cachebusting\CachebustingServiceProvider'
	...
```

You can also add an alias to the list of class aliases in the same app.php

```php
	...
	'Bust'    => 'Maherelgamil\Cachebusting\Facades\Cachebusting'
	...
```

## Useage

```html
    	<link rel="stylesheet" type="text/css" href="{{ Bust::url('css/style.css') }}" />
```


## License

Cachebusting is an open-sourced laravel package licensed under the MIT license