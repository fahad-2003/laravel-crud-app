<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Car; 

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // Define model policies here, if needed
    ];

    /**
     * Register any authentication / authorization services.
     */
    use Illuminate\Support\Facades\Gate;

public function boot()
{
    Gate::define('edit-car', function ($user, $car) {
        return $user->id === $car->user_id;
    });
}

}
