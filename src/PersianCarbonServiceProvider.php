<?php

namespace Mmeshkatian\PersianCarbon;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class PersianCarbonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::mixin(PersianCarbon::class);
    }
}
