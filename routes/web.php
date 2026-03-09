<?php

use App\Http\Controllers\LocationController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth'] //
], function () {

    Route::get('/', [\App\Http\Controllers\HomeController::class , 'home'])->name('admin.dashboard');
    Route::resource('articles/images', \App\Http\Controllers\ImageArticleController::class)->only(['store', 'show','destroy']);
    Route::resource('articles', \App\Http\Controllers\ArticleController::class)->only(['store', 'update', 'index', 'destroy']);
});
Route::get('redirects', [\App\Http\Controllers\HomeController::class , 'index']);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localize', 'withLocations'] //
], function(){
    Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');

    Route::group([
        'prefix' => 'info',
    ], function() {
        Route::view('/emerald', 'info.emerald')->name('emerald');
        Route::view('/lory', 'info.lory')->name('lory');
        Route::view('/siena', 'info.siena')->name('siena');
        Route::view('/dandelion', 'info.dandelion')->name('dandelion');
        Route::view('/dandelion/chez-marie', 'info.dandelion-chezmarie')->name('dandelion.chezmarie');
		Route::view('/xxl_apartments', 'info.xxl_apartments')->name('xxl_apartments');
    });

    Route::view('/', 'index')->name('home');
    Route::view('/DSGVO', 'dsgvo')->name('DSGVO');
    Route::view('/AGB', 'agb')->name('AGB');
    Route::view('/hausordnung', 'hausordnung')->name('hausordnung');
    Route::view('/impressum', 'impressum')->name('impressum');
//    Route::view('/travelinfo', 'covid')->name('travelinfo');
    Route::view('/contact', 'kontakt')->name('contact');
    Route::redirect('/kontakt', '/contact')->name('kontakt');
    Route::view('/locations', 'locations')->name('locations');
    Route::get('/locations/{slug}', [LocationController::class, 'show'])->name('location');

    Route::view('/newsletter-signup', 'newsletter_form')->name('newsletter-signup');
    Route::get('/blog', [\App\Http\Controllers\HomeController::class, 'getBlog'])->name('blog');
    Route::get('/blog/{slug}', [\App\Http\Controllers\HomeController::class, 'getArticle'])->name('blog.show');
});

Route::view('/newsletter', 'newsletter_lp')->name('newsletter');

Route::get('optimize', function() {
    \Artisan::call('optimize:clear');
    return('All clear!');
});

Route::get('config-cache', function() {
    \Artisan::call('config:cache');
    return('Config cached!');
});

Route::get('key-generate', function() {
    \Artisan::call('key:generate');
    return('Key generated!');
});

Route::get('storage-link', function() {
    \Artisan::call('storage:link');
    return('Storage link generated!');
});

Route::get('migrate', function() {
    \Artisan::call('migrate', array('--path' => 'database/migrations', '--force' => true));
    return('Migration should be complete!');
});
