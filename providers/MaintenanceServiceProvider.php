<?php

declare(strict_types=1);

namespace Vdlp\Maintenance\Providers;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Vdlp\Maintenance\Classes\MaintenanceResponder;
use Vdlp\Maintenance\Contracts\ResponseMaker;

final class MaintenanceServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ResponseMaker::class, MaintenanceResponder::class);

        $this->registerMaintenanceHandler();
    }

    protected function registerMaintenanceHandler(): void
    {
        $this->app->booting(static function (Application $app) {
            if ($app->isDownForMaintenance() && !$app->runningInConsole()) {
                /** @var ResponseMaker $responder */
                $responder = $app->make(ResponseMaker::class);
                $responder->getResponse()->send();
                exit;
            }
        });
    }
}
