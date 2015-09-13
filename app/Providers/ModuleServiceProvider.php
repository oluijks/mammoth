<?php

/**
 * Mammoth module service provider
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */

namespace Mammoth\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    protected $files;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $modules = config('mammoth.modules');

        if (is_dir(app_path() . '/Modules/')) {
            $modules = (config('mammoth.modules')) ?:
                array_map('class_basename',
                    $this->files->directories(app_path() . '/Modules/'));

            foreach ($modules as $module) {
                $routes = app_path() . '/Modules/' . $module . '/routes.php';
                $views  = app_path() . '/Modules/' . $module . '/Views';
                $trans  = app_path() . '/Modules/' . $module . '/Lang';

                if ($this->files->exists($routes)) { include $routes; }
                if ($this->files->isDirectory($views)) { $this->loadViewsFrom($views, $module); }
                if ($this->files->isDirectory($trans)) { $this->loadTranslationsFrom($trans, $module); }
            }
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->files = new Filesystem;
    }
}
