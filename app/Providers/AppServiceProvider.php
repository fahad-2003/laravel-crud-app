<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register(): void
    {
        
    }


    public function boot()
{
    Gate::define('edit-car', function ($user, $car) {
        return $user->id === $car->user_id;
    });
}

}
