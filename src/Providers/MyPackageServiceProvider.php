<?php

namespace MyNamespace\Providers;

use Illuminate\Support\ServiceProvider;
use MyNamespace\MyPackage;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('my-package', function () {
            return new MyPackage();
        });
    }

    public function boot()
    {
        // Optionally, you can publish any configuration or views here
    }
}
