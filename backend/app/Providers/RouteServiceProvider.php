<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The namespace to assume when generating URLs to controllers.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';  // Add this line

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        // parent::boot();
    }

    /**
     * Define the routes for your application.
     *
     * @return void
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * @return void
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)  // Ensure the correct namespace
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "web" routes for the application.
     *
     * @return void
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
             ->namespace($this->namespace)  // Ensure the correct namespace
             ->group(base_path('routes/web.php'));
    }
}
