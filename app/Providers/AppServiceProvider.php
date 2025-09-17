<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\JobVacancy;
use App\Models\Partner;
use App\Models\PartnerRequest;
use App\Observers\BlogObserver;
use App\Observers\JobsObserver;
use App\Observers\PartnerObserver;
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
        Blog::observe(BlogObserver::class);
        JobVacancy::observe(JobsObserver::class);
        Partner::observe(PartnerObserver::class);
    }
}
