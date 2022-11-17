<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $this->trueLinks();
    }

    public function trueLinks() {
        View::composer('app.sections.header', function($view){
            $view->with('homeLink', request()->is('/')? '#masthead' : route('home'));
            $view->with('articlesLink', request()->is('/')? '#articles' : route('articlesAll'));
            $view->with('aboutLink', request()->is('/')? '#about' : route('about'));
            $view->with('adminLink', request()->is('/admin')? '' : route('admin.index'));
        });
    }
}
