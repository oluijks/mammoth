<?php

/**
 * Mammoth module service provider.
 *
 * Copyright 2016 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
namespace Mammoth\Providers;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * @var
     */
    protected $files;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Setup modules structure and load routes, views and lang
        $modules = config('mammoth.modules');
        $modulesDir = app_path().'/Modules/';

        if (is_dir($modulesDir)) {
            $modules = $modules ?:
                array_map('class_basename',
                    $this->files->directories($modulesDir));

            foreach ($modules as $module) {
                $routes = $modulesDir.$module.'/routes.php';
                $views = $modulesDir.$module.'/Views';
                $trans = $modulesDir.$module.'/Lang';

                if ($this->files->exists($routes)) {
                    include $routes;
                }
                if ($this->files->isDirectory($views)) {
                    $this->loadViewsFrom($views, $module);
                }
                if ($this->files->isDirectory($trans)) {
                    $this->loadTranslationsFrom($trans, $module);
                }
            }
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->files = new Filesystem();
    }
}
