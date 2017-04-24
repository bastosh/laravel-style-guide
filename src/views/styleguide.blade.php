<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- If you wish to change the highlight.js theme you can do so here: -->
    <!-- Reference: https://highlightjs.org/static/demo/ -->
    <!-- CDN: https://cdnjs.com/libraries/highlight.js/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/styles/atelier-estuary-light.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>

    <script src="{{ URL::asset('vendor/laravel-style-guide/css/app.css') }}"></script>
    
    {{-- Change this to point to your stylesheet --}}
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
  </head>
  <body>

    <div id="laravel-style-guide"></div>

    <script>
      // Put highlight.js in the window
      window.hljs = hljs;

      <?php
        // TODO: Move this to a class
        $finalSectionsArr = [];
        $sections = config('laravel-style-guide');
        foreach($sections as $sectionName => $section) {
          $finalSectionsArr[str_slug($sectionName)] = [
            'name' => $sectionName,
            'template' => $section,
            'path' => str_slug($sectionName)
          ];
        }
      ?>

      window.sections = {!! json_encode($finalSectionsArr) !!};
    </script>

    <script src="{{ URL::asset('vendor/laravel-style-guide/js/app.js') }}"></script>
  </body>
</html>
