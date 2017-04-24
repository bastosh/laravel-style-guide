<?php
/**
 * You may define custom routes for your package here
 */

 Route::get('/style-guide', function () {
   return view('laravel-style-guide::styleguide');
 });

try {
  $templatesPath = resource_path('views/vendor/laravel-style-guide/sections/');

  $dir = new DirectoryIterator($templatesPath);
  foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
      $info = pathinfo($fileinfo);
      Route::get('/style-guide/' . str_replace('.blade', '', $info['filename']),
        function () use ($info, $templatesPath) {
          if (!strpos($info['filename'], '.blade')) {
            return File::get($templatesPath . $info['basename']);
          } else {
            return view('laravel-style-guide::sections.' . str_replace('.blade', '', $info['filename']));
          }
        }
      );
    }
  }
} catch (UnexpectedValueException $e) {
  if (!App::runningInConsole())
  {
    throw new Exception("You must publish laravel style guide. Please run 'php artisan vendor:publish' from the command line to continue");
  }
}
