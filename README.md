<p align="center">
	<img height="60px" width="60px" src="https://plugins.vdlp.nl/octobercms/icons/Vdlp.Maintenance.svg">
	<h1 align="center">Vdlp.Maintenance</h1>
</p>

<p align="center">
	<em>Handles HTTP requests when October CMS is in maintenance mode.</em>
</p>

<p align="center">
	<img src="https://badgen.net/packagist/php/vdlp/oc-maintenance-plugin">
	<img src="https://badgen.net/packagist/license/vdlp/oc-maintenance-plugin">
	<img src="https://badgen.net/packagist/v/vdlp/oc-maintenance-plugin/latest">
	<img src="https://badgen.net/packagist/dt/vdlp/oc-maintenance-plugin">
	<img src="https://badgen.net/badge/cms/October%20CMS">
	<img src="https://badgen.net/badge/type/plugin">
</p>

To bring October CMS down:

```
php artisan down
```

To bring October CMS up:

```
php artisan up
```

## Installation

```
composer require vdlp/oc-maintenance-plugin
```

## Customization

This plugin is shipped with a default maintenance page.

If you would like to customize this page you can create a folder called `maintenance` in the root of your project. Inside this directory you should create a file called `503.htm`. This file is rendered using the default view engine of your project and receives two variables: `app_name` and `locale`, where `app_name` is the value of the `app.name` configuration variable and `locale` is the active locale name.
