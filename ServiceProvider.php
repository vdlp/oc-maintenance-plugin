<?php

declare(strict_types=1);

namespace Vdlp\Maintenance;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider as ServiceProviderBase;
use Vdlp\Maintenance\Classes\MaintenanceResponder;
use Vdlp\Maintenance\Contracts\ResponseMaker;

final class ServiceProvider extends ServiceProviderBase
{
    public function register(): void
    {
        $this->app->bind(ResponseMaker::class, MaintenanceResponder::class);

        $this->registerMaintenanceHandler();
    }

    protected function registerMaintenanceHandler(): void
    {
        $this->app->booting(static function (Application $app): void {
            if ($app->isDownForMaintenance() && !$app->runningInConsole()) {
                /** @var ResponseMaker $responder */
                $responder = $app->make(ResponseMaker::class);
                $responder->getResponse()->send();

                exit(0);
            }
        });
    }
}
