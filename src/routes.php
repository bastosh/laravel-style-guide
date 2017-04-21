<?php
/**
 * You may define custom routes for your package here
 */

 Route::get('/style-guide', function () {
     return view('laravel-style-guide::styleguide');
 });
