<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('view', function () {
        //     [ 'layouts.app', 'index' ], 'App\Http\ViewComposers\MenuListComposer'
        // });

        view()->composer(
            [
                'vendor.harimayco-menu.menu-html',
                'layouts.app',

            ], 'App\Http\ViewComposers\ProductCategoryListComposer'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
