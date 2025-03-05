<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Project;
use App\Models\MetriDesignPost;
use App\Models\MetriDigitalPost;
use App\Models\MetriEntertainmentPost;
use App\Models\MetriEventPost;
use App\Models\MetriFilmEquipmentPost;
use App\Models\MetriFilmPost;
use App\Models\MetriPostPost;
use App\Observers\ProjectObserver;

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
        MetriDesignPost::observe(ProjectObserver::class);
        MetriDigitalPost::observe(ProjectObserver::class);
        MetriEntertainmentPost::observe(ProjectObserver::class);
        MetriEventPost::observe(ProjectObserver::class);
        MetriFilmEquipmentPost::observe(ProjectObserver::class);
        MetriFilmPost::observe(ProjectObserver::class);
        MetriPostPost::observe(ProjectObserver::class);
    }
    
}
