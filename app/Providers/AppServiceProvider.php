<?php

namespace App\Providers;

use App\Repositories\Contracts\BrandRepository;
use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\ProductRepository;
use App\Repositories\Contracts\TeamRepository;
use App\Repositories\Contracts\TestimonialRepository;
use App\Repositories\Contracts\UserRepository;
use App\Repositories\Contracts\VendorRepository;
use App\Repositories\Eloquent\EloquentBrandRepository;
use App\Repositories\Eloquent\EloquentCategoryRepository;
use App\Repositories\Eloquent\EloquentProductRepository;
use App\Repositories\Eloquent\EloquentTeamRepository;
use App\Repositories\Eloquent\EloquentTestimonialRepository;
use App\Repositories\Eloquent\EloquentUserRepository;
use App\Repositories\Eloquent\EloquentVendorRepository;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Kurt\Repoist\RepoistServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       // $this->app->register(Kurt\Repoist\RepoistServiceProvider::class);
       $this->app->singleton( BrandRepository::class, EloquentBrandRepository::class );
       $this->app->singleton( VendorRepository::class, EloquentVendorRepository::class );
       $this->app->singleton( UserRepository::class, EloquentUserRepository::class );
       $this->app->singleton( ProductRepository::class, EloquentProductRepository::class );
       $this->app->singleton( TeamRepository::class, EloquentTeamRepository::class );
       $this->app->singleton( CategoryRepository::class, EloquentCategoryRepository::class );
       $this->app->singleton( TestimonialRepository::class, EloquentTestimonialRepository::class );
    }
}
