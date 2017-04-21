<?php
/**
 * You may define custom routes for your package here
 */

 Route::get('/style-guide', function () {
   return view('laravel-style-guide::styleguide');
 });

// TODO: Check to see if the views are published if they are use that Directory
$templatesPath = base_path('vendor/dolbex/laravel-style-guide/src/views/sections/');

$dir = new DirectoryIterator($templatesPath);
foreach ($dir as $fileinfo) {
  if (!$fileinfo->isDot()) {
    $info = pathinfo($fileinfo);

    Route::get('/style-guide/' . $info['filename'], function () use ($info) {
      $path = base_path('vendor/dolbex/laravel-style-guide/src/views/sections/');
      return File::get($path . '/' . $info['basename']);
    });
  }
}
