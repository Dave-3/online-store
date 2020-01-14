<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    public function register()
    {
        view()->composer(
            ['layouts.app'],
            'App\ViewComposers\AppComposer'
        );
    }

    public function boot()
    {
        //
    }
}

