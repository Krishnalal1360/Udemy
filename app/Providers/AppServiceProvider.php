<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use Illuminate\Support\Facades\Gate;
//use App\Models\User;
//use App\Models\UserPost;
//use App\Policies\UserPostPolicy;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        /*
        Gate::define('user-post', function(User $user, UserPost $post){
            //
            return $user->id === $post->user_id;
        });
        */
        //
        //$this->registerPolicies();
    }
}
