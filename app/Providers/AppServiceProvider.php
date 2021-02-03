<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Web\BaseRepository;
use App\Repositories\Web\ProductRepository;
use App\Repositories\Admin\AdminProductInterface;
use App\Repositories\Admin\AdminProductRepository;
use App\Repositories\Web\CartRepository;
use App\Repositories\Web\CartInterface;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BaseRepository::class, ProductRepository::class);
        $this->app->singleton(CartInterface::class, CartRepository::class);
        $this->app->singleton(AdminProductInterface::class, AdminProductRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
