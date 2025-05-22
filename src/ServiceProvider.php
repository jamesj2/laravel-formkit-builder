<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 */
class ServiceProvider extends BaseServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/formkit-schema.php', 'formkit-schema');

        $this->app->bind(FormSchemaBuilder::class, function () {
            return new FormSchemaBuilder();
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/formkit-schema.php' => config_path('formkit-schema.php'),
            ], 'laravel-formkit-builder-config');
        }
    }

    /** @return array<string> */
    public function provides(): array
    {
        return [
            FormSchemaBuilder::class,
        ];
    }
}
