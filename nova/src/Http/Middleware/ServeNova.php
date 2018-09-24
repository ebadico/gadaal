<?php

namespace Laravel\Nova\Http\Middleware;

use Laravel\Nova\Nova;
use Laravel\Nova\NovaServiceProvider;
<<<<<<< HEAD
=======
use Laravel\Nova\Events\NovaServiceProviderRegistered;
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb

class ServeNova
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        if ($this->isNovaRequest($request)) {
            app()->register(NovaServiceProvider::class);
<<<<<<< HEAD
=======

            NovaServiceProviderRegistered::dispatch();
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
        }

        return $next($request);
    }

    /**
     * Determine if the given request is intended for Nova.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function isNovaRequest($request)
    {
<<<<<<< HEAD
        $path = trim(Nova::path(), '/');

        return $request->is($path) ||
               $request->is($path.'/*') ||
=======
        $path = trim(Nova::path(), '/') ?: '/';

        return $request->is($path) ||
               $request->is(trim($path.'/*', '/')) ||
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
               $request->is('nova-api/*');
    }
}
