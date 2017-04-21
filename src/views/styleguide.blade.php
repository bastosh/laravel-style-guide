<!DOCTYPE html>
<html lang="en">
  <head>
  </head>
  <body>

    <div id="laravel-style-guide"></div>

    <script>
      <?php
        // TODO: Move this to a class
        $finalSectionsArr = [];
        $sections = config('laravel-style-guide');
        foreach($sections as $sectionName => $section) {
          $finalSectionsArr[] = [
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
