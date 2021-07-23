<?php

declare(strict_types=1);

namespace LynX39\LaraPdfMerger;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PdfMergerServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->app->singleton(PdfManage::class, fn (Application $app) => new PdfManage());
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides(): array
    {
        return [PdfManage::class];
    }
}
