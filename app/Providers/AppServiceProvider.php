<?php

namespace App\Providers;

use App\Models\PartnerRequest;
use App\Observers\PartnerRequestObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        PartnerRequest::observe(PartnerRequestObserver::class);
    }
}
