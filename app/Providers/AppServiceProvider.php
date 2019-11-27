<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // $this->registerPolicies();

        // Gate::define('update-post', function ($user, $post){
        //     return $user->id === $post->user->id;
        // });

        // Gate::define('create-post', function ($user, $post){
        //     return $user->id === 1;
        // });
    }
}
