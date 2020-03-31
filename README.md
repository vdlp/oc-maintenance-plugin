# VDLP Maintenance Plugin

Handles HTTP requests when October CMS is in maintenance mode.

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
