<?php
/**
 * You may define custom routes for your package here
 */

 Route::get('/style-guide', function () {
   return view('laravel-style-guide::styleguide');
 });

$templatesPath = resource_path('views/vendor/laravel-style-guide/sections/');

$dir = new DirectoryIterator($templatesPath);
foreach ($dir as $fileinfo) {
  if (!$fileinfo->isDot()) {
    $info = pathinfo($fileinfo);
    Route::get('/style-guide/' . str_replace('.blade', '', $info['filename']), function () use ($info) {
      $path = base_path('vendor/dolbex/laravel-style-guide/src/views/sections/');
      if (!strpos($info['filename'], '.blade')) {
        return File::get($path . '/' . $info['basename']);
      } else {
        return view('laravel-style-guide::sections.' . str_replace('.blade', '', $info['filename']));
      }
    });
  }
}
