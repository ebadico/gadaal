<?php

namespace Laravel\Nova;

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Route;
use Laravel\Nova\Events\NovaServiceProviderRegistered;
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb

class PendingRouteRegistration
{
    /**
     * Indicates if the routes have been registered.
     *
     * @var bool
     */
    protected $registered = false;

    /**
     * Register the Nova authentication routes.
     *
     * @param  array  $middleware
     * @return $this
     */
    public function withAuthenticationRoutes($middleware = ['web'])
    {
        Route::namespace('Laravel\Nova\Http\Controllers')
<<<<<<< HEAD
=======
            ->domain(config('nova.domain', null))
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
            ->middleware($middleware)
            ->as('nova.')
            ->prefix(Nova::path())
            ->group(function () {
                Route::get('/login', 'LoginController@showLoginForm');
                Route::post('/login', 'LoginController@login')->name('login');
            });

        return $this;
    }

    /**
     * Register the Nova password reset routes.
     *
     * @param  array  $middleware
     * @return $this
     */
    public function withPasswordResetRoutes($middleware = ['web'])
    {
        Nova::$resetsPasswords = true;

        Route::namespace('Laravel\Nova\Http\Controllers')
<<<<<<< HEAD
=======
            ->domain(config('nova.domain', null))
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
            ->middleware($middleware)
            ->as('nova.')
            ->prefix(Nova::path())
            ->group(function () {
                Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
                Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
                Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
                Route::post('/password/reset', 'ResetPasswordController@reset');
            });

        return $this;
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    public function register()
    {
        $this->registered = true;

        Route::namespace('Laravel\Nova\Http\Controllers')
<<<<<<< HEAD
=======
            ->domain(config('nova.domain', null))
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
            ->middleware(config('nova.middleware', []))
            ->as('nova.')
            ->prefix(Nova::path())
            ->group(function () {
<<<<<<< HEAD
                Route::get('/logout', 'LoginController@logout');
            });

        Route::view(Nova::path(), 'nova::router')
            ->middleware(config('nova.middleware', []))
            ->name('nova.index');

        Route::middleware(config('nova.middleware', []))
            ->as('nova.')
            ->prefix(Nova::path())
            ->get('/{view}', 'Laravel\Nova\Http\Controllers\RouterController@show')
            ->where('view', '.*');
=======
                Route::get('/logout', 'LoginController@logout')->name('logout');
            });

        Event::listen(NovaServiceProviderRegistered::class, function () {
            Route::domain(config('nova.domain', null))
                ->middleware(config('nova.middleware', []))
                ->group(function () {
                    Route::view(Nova::path(), 'nova::router')->name('nova.index');
                });

            Route::middleware(config('nova.middleware', []))
                ->domain(config('nova.domain', null))
                ->as('nova.')
                ->prefix(Nova::path())
                ->get('/{view}', 'Laravel\Nova\Http\Controllers\RouterController@show')
                ->where('view', '.*');
        });
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
    }

    /**
     * Handle the object's destruction and register the router route.
     *
     * @return void
     */
    public function __destruct()
    {
        if (! $this->registered) {
            $this->register();
        }
    }
}
