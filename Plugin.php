<?php

declare(strict_types=1);

namespace Vdlp\Maintenance;

use System\Classes\PluginBase;

final class Plugin extends PluginBase
{
    public function pluginDetails(): array
    {
        return [
            'name' => 'vdlp.maintenance::lang.plugin.name',
            'description' => 'vdlp.maintenance::lang.plugin.description',
            'author' => 'Van der Let & Partners',
            'icon' => 'icon-wrench',
        ];
    }

    public function register(): void
    {
        $this->app->register(ServiceProvider::class);
    }
}
