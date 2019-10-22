<?php

namespace EderSoares\LaravelVersion;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class VersionServiceProvider extends LaravelServiceProvider
{
    /**
     * @return void
     */
    public function boot()
    {
        Route::get('version', function () {
            return [
                'version' => $this->app->version(),
            ];
        });
    }
}
