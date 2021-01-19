<?php

namespace Lnchub\Filemanager;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

/**
 * Class FilemanagerServiceProvider.
 */
class FilemanagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/lang', 'filemanager');
        $this->loadViewsFrom(__DIR__.'/views', 'filemanager');
        $this->publishes([__DIR__ . '/config/lfm.php' => base_path('config/lfm.php')], 'lfm_config');
        $this->publishes([__DIR__.'/../public' => public_path('vendor/filemanager')], 'lfm_public');
        $this->publishes([__DIR__.'/views'  => base_path('resources/views/vendor/filemanager')], 'lfm_view');
        $this->publishes([__DIR__.'/Handlers/LfmConfigHandler.php' => base_path('app/Handlers/LfmConfigHandler.php')], 'lfm_handler');

        if (config('lfm.use_package_routes')) {
            Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
                Lfm::routes();
            });
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/lfm.php', 'lfm-config');
        $this->app->singleton('filemanager', function () {
            return true;
        });
    }
}
