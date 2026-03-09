<?php

namespace App\Http\Middleware;

use App\Models\Location;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class SendLocations
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $locations = Location::where('status', 1)->get();
        } catch (\Throwable $e) {
            $locations = new Collection();
        }
        \View::share('locations', $locations);
        return $next($request);
    }
}
