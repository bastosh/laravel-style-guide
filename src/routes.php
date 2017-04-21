<?php
/**
 * You may define custom routes for your package here
 */

 Route::get('/style-guide', function () {
   return view('laravel-style-guide::styleguide');
 });

 Route::get('/style-guide/buttons', function () {
   $path = base_path('vendor/dolbex/laravel-style-guide/src/views/sections/');
   return File::get($path . '/buttons.html');
 });
