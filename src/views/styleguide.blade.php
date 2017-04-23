<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- If you wish to change the highlight.js theme you can do so here: -->
    <!-- Reference: https://highlightjs.org/static/demo/ -->
    <!-- CDN: https://cdnjs.com/libraries/highlight.js/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/styles/atelier-estuary-light.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>

    <style>
    .hljs {
      display: block;
      overflow-x: auto;
      padding: 0.5em;
      font-size:1.2em;
      line-height:1.3em;
    }
    </style>
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
    <script src="http://localhost:8080/app.js"></script>
  </body>
</html>
