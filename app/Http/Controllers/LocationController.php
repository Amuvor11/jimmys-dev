<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function show($slug)
    {
        try {
            $location = Location::where('status', 1)->where('slug', $slug)->firstOrFail();
            return view('location')->withLocation($location);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404);
        } catch (\Throwable $e) {
            abort(503, __('Service temporarily unavailable. Please try again later.'));
        }
    }
}
