<?php

declare(strict_types=1);

namespace Vdlp\Maintenance\Providers;

use Config;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Request;
use Vdlp\Maintenance\Classes\Contracts\ResponseMaker;
use Vdlp\Maintenance\Classes\MaintenanceResponder;

final class MaintenanceServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config.php' => config_path('vdlp_maintenance.php'),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config.php', 'vdlp_maintenance');
    }

    public function register(): void
    {
        $this->app->bind(ResponseMaker::class, MaintenanceResponder::class);

        $this->registerMaintenanceHandler();
    }

    private function registerMaintenanceHandler(): void
    {
        $this->app->booting(static function (Application $app): void {
            $whitelist = explode(',', Config::get('vdlp_maintenance.whitelisted_ips', ''));
            $whitelisted = in_array(Request::ip(), $whitelist, true);
            if ($app->isDownForMaintenance() && !$app->runningInConsole() && !$whitelisted) {
                /** @var ResponseMaker $responder */
                $responder = $app->make(ResponseMaker::class);
                $responder->getResponse()->send();

                exit(0);
            }
        });
    }
}
