<?php

/*
|--------------------------------------------------------------------------
| Peresmishnyk\LaravelGlide Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the Peresmishnyk\LaravelGlide package.
|
*/

/**
 * User Routes
 */

// Route::group([
//     'middleware'=> array_merge(
//     	(array) config('backpack.base.web_middleware', 'web'),
//     ),
// ], function() {
//     Route::get('something/action', \Peresmishnyk\LaravelGlide\Http\Controllers\SomethingController::actionName());
// });

// Glide
$glide_urls = config('laravel-glide.url');
$glide_urls = is_array($glide_urls) ? $glide_urls : [$glide_urls];
foreach ($glide_urls as $url) {
    $url = trim($url, '/');
    Route::get('/' . $url . '/{path}', [\Peresmishnyk\LaravelGlide\Http\Controllers\ImageController::class, 'glide'])->where('path', '.*');
}

/**
 * Admin Routes
 */

// Route::group([
//     'prefix' => config('backpack.base.route_prefix', 'admin'),
//     'middleware' => array_merge(
//         (array) config('backpack.base.web_middleware', 'web'),
//         (array) config('backpack.base.middleware_key', 'admin')
//     ),
// ], function () {
//     Route::crud('some-entity-name', \Peresmishnyk\LaravelGlide\Http\Controllers\Admin\EntityNameCrudController::class);
// });
